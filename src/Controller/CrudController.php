<?php

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
 * @Route("/crud")
 */
class CrudController extends AbstractController
{
    /**
     * @Route("/", defaults={"page": "1", "_format"="html"}, methods="GET", name="crud_index")
     * @Route("/rss.xml", defaults={"page": "1", "_format"="xml"}, methods="GET", name="crud_rss")
     * @Route("/page/{page<[1-9]\d*>}", defaults={"_format"="html"}, methods="GET", name="crud_index_paginated")
     * @Cache(smaxage="10")
     */
    public function index(Request $request, int $page, string $_format, ElementRepository $elements, TagRepository $tags): Response
    {
        $tag = null;
        if ($request->query->has('tag')) {
            $tag = $tags->findOneBy(['name' => $request->query->get('tag')]);
        }
        $latestElements = $elements->findLatest($page, $tag);

        return $this->render('crud/index.'.$_format.'.twig', [
            'paginator' => $latestElements,
            'tagName' => $tag ? $tag->getName() : null,
        ]);
    }

    /**
     * @Route("/elements/{slug}", methods="GET", name="crud_element")
     */
    public function elementShow(Element $element): Response
    {
        return $this->render('crud/element_show.html.twig', ['element' => $element]);
    }

    /**
     * @Route("/subelement/{elementSlug}/new", methods="POST", name="subelement_new")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
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

            $eventDispatcher->dispatch(new SubelementCreatedEvent($subelement));

            return $this->redirectToRoute('crud_element', ['slug' => $element->getSlug()]);
        }

        return $this->render('crud/subelement_form_error.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    public function subelementForm(Element $element): Response
    {
        $form = $this->createForm(SubelementType::class);

        return $this->render('crud/_subelement_form.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}", methods="GET", name="subelement_show")
     */
    public function subelementShow(Subelement $subelement): Response
    {
        // $this->denyAccessUnlessGranted(ElementVoter::SHOW, $element, 'Elements can only be shown to their authors.');

        return $this->render('admin/crud/sub_element_show.html.twig', [
            'subelement' => $subelement,
        ]);
    }

    /**
     * @Route("/{id}/delete", methods="POST", name="subelement_delete")
     */
    // @IsGranted("delete", subject="subelement")
    public function subelementDelete(Request $request, Subelement $subelement): Response
    {
        $element = $subelement->getElement();
        $slugElement = $element->getSlug();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('crud_element', ['slug' => $slugElement]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($subelement);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('crud_element', ['slug' => $slugElement]);
    }

    /**
     * @Route("/search", methods="GET", name="crud_search")
     */
    public function search(Request $request, ElementRepository $elements): Response
    {
        $query = $request->query->get('q', '');
        $limit = $request->query->get('l', 10);

        if (!$request->isXmlHttpRequest()) {
            return $this->render('crud/search.html.twig', ['query' => $query]);
        }

        $foundElements = $elements->findBySearchQuery($query, $limit);

        $results = [];
        foreach ($foundElements as $element) {
            $user = $this->getUser();
            isset($user) ? $userFullName = $user->getFullName() : $userFullName = '';

            $tags = $element->getTags();
            $tagsList = '';
            $allowed = false;
            foreach ($tags as $tag) {
                if (strval($tag) === strval($userFullName)) {
                    $tagsList = $tagsList.' '.$tag;
                    $allowed = true;
                }
            }

            $allowed ? $results[] = [
                'title' => htmlspecialchars($element->getTitle(), ENT_COMPAT | ENT_HTML5),
                'date' => $element->getPublishedAt()->format('M d, Y'),
                'author' => htmlspecialchars($element->getAuthor()->getFullName(), ENT_COMPAT | ENT_HTML5),
                'summary' => htmlspecialchars($element->getSummary(), ENT_COMPAT | ENT_HTML5),
                'tags' => $tagsList,
                'url' => $this->generateUrl('crud_element', ['slug' => $element->getSlug()]),
            ] : $results;
        }

        return $this->json($results);
    }
}
