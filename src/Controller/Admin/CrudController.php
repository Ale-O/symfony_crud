<?php

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
 * @Route("/admin/element")
 * @IsGranted("ROLE_ADMIN")
 */
class CrudController extends AbstractController
{
    /**
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
     * @Route("/new", methods="GET|POST", name="admin_element_new")
     */
    public function new(Request $request): Response
    {
        $element = new Element();
        $element->setAuthor($this->getUser());

        $form = $this->createForm(ElementType::class, $element)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($element);
            $em->flush();

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
     * @Route("/{id<\d+>}", methods="GET", name="admin_element_show")
     */
    public function show(Element $element): Response
    {
        // $this->denyAccessUnlessGranted(ElementVoter::SHOW, $element, 'Elements can only be shown to their authors.');

        return $this->render('admin/crud/show.html.twig', [
            'element' => $element,
        ]);
    }

    /**
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_element_edit")
     */
    // @IsGranted("edit", subject="element", message="Elements can only be edited by their authors.")
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
     * @Route("/{id}/delete", methods="POST", name="admin_element_delete")
     * @IsGranted("delete", subject="element")
     */
    public function delete(Request $request, Element $element): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_index');
        }

        $element->getTags()->clear();

        $em = $this->getDoctrine()->getManager();
        $em->remove($element);
        $em->flush();

        $this->addFlash('success', 'element.deleted_successfully');

        return $this->redirectToRoute('admin_element_index');
    }
}
