<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Entity\Element;
use App\Entity\Subelement;
use App\Event\SubelementCreatedEvent;
use App\Form\SubelementType;
use App\Repository\ElementRepository;
use App\Repository\TagRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage blog contents in the public part of the site.
 *
 * @Route("/blog")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", defaults={"page": "1", "_format"="html"}, methods="GET", name="blog_index")
     * @Route("/rss.xml", defaults={"page": "1", "_format"="xml"}, methods="GET", name="blog_rss")
     * @Route("/page/{page<[1-9]\d*>}", defaults={"_format"="html"}, methods="GET", name="blog_index_paginated")
     * @Cache(smaxage="10")
     *
     * NOTE: For standard formats, Symfony will also automatically choose the best
     * Content-Type header for the response.
     * See https://symfony.com/doc/current/routing.html#special-parameters
     */
    public function index(Request $request, int $page, string $_format, ElementRepository $elements, TagRepository $tags): Response
    {
        $tag = null;
        if ($request->query->has('tag')) {
            $tag = $tags->findOneBy(['name' => $request->query->get('tag')]);
        }
        $latestElements = $elements->findLatest($page, $tag);

        // Every template name also has two extensions that specify the format and
        // engine for that template.
        // See https://symfony.com/doc/current/templates.html#template-naming
        return $this->render('blog/index.'.$_format.'.twig', [
            'paginator' => $latestElements,
            'tagName' => $tag ? $tag->getName() : null,
        ]);
    }

    /**
     * @Route("/elements/{slug}", methods="GET", name="blog_element")
     *
     * NOTE: The $element controller argument is automatically injected by Symfony
     * after performing a database query looking for a Element with the 'slug'
     * value given in the route.
     * See https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html
     */
    public function elementShow(Element $element): Response
    {
        // Symfony's 'dump()' function is an improved version of PHP's 'var_dump()' but
        // it's not available in the 'prod' environment to prevent leaking sensitive information.
        // It can be used both in PHP files and Twig templates, but it requires to
        // have enabled the DebugBundle. Unsubelement the following line to see it in action:
        //
        // dump($element, $this->getUser(), new \DateTime());

        return $this->render('blog/element_show.html.twig', ['element' => $element]);
    }

    /**
     * @Route("/subelement/{elementSlug}/new", methods="POST", name="subelement_new")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
     *
     * NOTE: The ParamConverter mapping is required because the route parameter
     * (elementSlug) doesn't match any of the Doctrine entity properties (slug).
     * See https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html#doctrine-converter
     */
    public function subelementNew(Request $request, Element $element, EventDispatcherInterface $eventDispatcher): Response
    {
        $subelement = new Subelement();
        $subelement->setAuthor($this->getUser());
        $element->addSubelement($subelement);

        $form = $this->createForm(SubelementType::class, $subelement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subelement);
            $em->flush();

            // When an event is dispatched, Symfony notifies it to all the listeners
            // and subscribers registered to it. Listeners can modify the information
            // passed in the event and they can even modify the execution flow, so
            // there's no guarantee that the rest of this controller will be executed.
            // See https://symfony.com/doc/current/components/event_dispatcher.html
            $eventDispatcher->dispatch(new SubelementCreatedEvent($subelement));

            return $this->redirectToRoute('blog_element', ['slug' => $element->getSlug()]);
        }

        return $this->render('blog/subelement_form_error.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * This controller is called directly via the render() function in the
     * blog/element_show.html.twig template. That's why it's not needed to define
     * a route name for it.
     *
     * The "id" of the Element is passed in and then turned into a Element object
     * automatically by the ParamConverter.
     */
    public function subelementForm(Element $element): Response
    {
        $form = $this->createForm(SubelementType::class);

        return $this->render('blog/_subelement_form.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}", methods="GET", name="blog_show")
     */
    public function subelementShow(Subelement $subelement): Response
    {
        // $this->denyAccessUnlessGranted(ElementVoter::SHOW, $element, 'Elements can only be shown to their authors.');

        return $this->render('admin/blog/sub_element_show.html.twig', [
            'subelement' => $subelement,
        ]);
    }

    /**
     * @Route("/search", methods="GET", name="blog_search")
     */
    public function search(Request $request, ElementRepository $elements): Response
    {
        $query = $request->query->get('q', '');
        $limit = $request->query->get('l', 10);

        if (!$request->isXmlHttpRequest()) {
            return $this->render('blog/search.html.twig', ['query' => $query]);
        }

        $foundElements = $elements->findBySearchQuery($query, $limit);

        $results = [];
        foreach ($foundElements as $element) {
            $results[] = [
                'title' => htmlspecialchars($element->getTitle(), ENT_COMPAT | ENT_HTML5),
                'date' => $element->getPublishedAt()->format('M d, Y'),
                'author' => htmlspecialchars($element->getAuthor()->getFullName(), ENT_COMPAT | ENT_HTML5),
                'summary' => htmlspecialchars($element->getSummary(), ENT_COMPAT | ENT_HTML5),
                'url' => $this->generateUrl('blog_element', ['slug' => $element->getSlug()]),
            ];
        }

        return $this->json($results);
    }
}
