<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Admin;

use App\Entity\Element;
use App\Form\ElementType;
use App\Repository\ElementRepository;
use App\Security\ElementVoter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used to manage crud contents in the backend.
 *
 * Please note that the application backend is developed manually for learning
 * purposes. However, in your real Symfony application you should use any of the
 * existing bundles that let you generate ready-to-use backends without effort.
 *
 * See http://knpbundles.com/keyword/admin
 *
 * @Route("/admin/element")
 * @IsGranted("ROLE_ADMIN")
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class CrudController extends AbstractController
{
    /**
     * Lists all Element entities.
     *
     * This controller responds to two different routes with the same URL:
     *   * 'admin_element_index' is the route with a name that follows the same
     *     structure as the rest of the controllers of this class.
     *   * 'admin_index' is a nice shortcut to the backend homepage. This allows
     *     to create simpler links in the templates. Moreover, in the future we
     *     could move this annotation to any other controller while maintaining
     *     the route name and therefore, without breaking any existing link.
     *
     * @Route("/", methods="GET", name="admin_index")
     * @Route("/", methods="GET", name="admin_element_index")
     */
    public function index(ElementRepository $elements): Response
    {
        // $authorElements = $elements->findBy(['author' => $this->getUser()], ['publishedAt' => 'DESC']);
        $allElements = $elements->findAll();

        return $this->render('admin/crud/index.html.twig', ['elements' => $allElements]);
    }

    /**
     * Creates a new Element entity.
     *
     * @Route("/new", methods="GET|POST", name="admin_element_new")
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function new(Request $request): Response
    {
        $element = new Element();
        $element->setAuthor($this->getUser());

        // See https://symfony.com/doc/current/form/multiple_buttons.html
        $form = $this->createForm(ElementType::class, $element)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        // the isSubmitted() method is completely optional because the other
        // isValid() method already checks whether the form is submitted.
        // However, we explicitly add it to improve code readability.
        // See https://symfony.com/doc/current/forms.html#processing-forms
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($element);
            $em->flush();

            // Flash messages are used to notify the user about the result of the
            // actions. They are deleted automatically from the session as soon
            // as they are accessed.
            // See https://symfony.com/doc/current/controller.html#flash-messages
            $this->addFlash('success', 'element.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_element_new');
            }

            return $this->redirectToRoute('admin_element_index');
        }

        return $this->render('admin/crud/new.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Finds and displays a Element entity.
     *
     * @Route("/{id<\d+>}", methods="GET", name="admin_element_show")
     */
    public function show(Element $element): Response
    {
        // This security check can also be performed
        // using an annotation: @IsGranted("show", subject="element", message="Elements can only be shown to their authors.")
        // $this->denyAccessUnlessGranted(ElementVoter::SHOW, $element, 'Elements can only be shown to their authors.');

        return $this->render('admin/crud/show.html.twig', [
            'element' => $element,
        ]);
    }

    /**
     * Displays a form to edit an existing Element entity.
     *
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_element_edit")
     * @IsGranted("edit", subject="element", message="Elements can only be edited by their authors.")
     */
    public function edit(Request $request, Element $element): Response
    {
        $form = $this->createForm(ElementType::class, $element);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'element.updated_successfully');

            return $this->redirectToRoute('admin_element_edit', ['id' => $element->getId()]);
        }

        return $this->render('admin/crud/edit.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Deletes a Element entity.
     *
     * @Route("/{id}/delete", methods="POST", name="admin_element_delete")
     * @IsGranted("delete", subject="element")
     */
    public function delete(Request $request, Element $element): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_index');
        }

        // Delete the tags associated with this crud element. This is done automatically
        // by Doctrine, except for SQLite (the database used in this application)
        // because foreign key support is not enabled by default in SQLite
        $element->getTags()->clear();

        $em = $this->getDoctrine()->getManager();
        $em->remove($element);
        $em->flush();

        $this->addFlash('success', 'element.deleted_successfully');

        return $this->redirectToRoute('admin_element_index');
    }
}
