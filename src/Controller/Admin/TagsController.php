<?php

namespace App\Controller\Admin;

use App\Entity\Tag;
use App\Form\TagType;
use App\Repository\TagRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/tags")
 * @IsGranted("ROLE_ADMIN")
 */
class TagsController extends AbstractController
{
    /**
     * @Route("/", defaults={"page": "1"}, methods="GET", name="admin_tag_index")
     * @Route("/page/{page<[1-9]\d*>}", methods="GET", name="admin_tag_paginated")
     */
    public function index(TagRepository $tags, int $page): Response
    {
        $allTags = $tags->findOrderByName($page);

        return $this->render('admin/tag/tags_list.html.twig', [
            'paginator' => $allTags,
        ]);
    }

    /**
     * @Route("/new", methods="GET|POST", name="admin_tag_new")
     */
    public function new(Request $request): Response
    {
        $tag = new Tag();

        $form = $this->createForm(TagType::class, $tag)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_tag_new');
            }

            return $this->redirectToRoute('admin_tag_index');
        }

        return $this->render('admin/tag/tag_new.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}", methods="GET", name="admin_tag_show")
     */
    public function show(Tag $tag): Response
    {
        return $this->render('admin/tag/tag_show.html.twig', [
            'tag' => $tag,
        ]);
    }

    /**
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_tag_edit")
     */
    public function edit(Request $request, Tag $tag): Response
    {
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_tag_edit', ['id' => $tag->getId()]);
        }

        return $this->render('admin/tag/tag_edit.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", methods="POST", name="admin_tag_delete")
     */
    public function delete(Request $request, Tag $tag): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_tag_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($tag);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_tag_index');
    }
}
