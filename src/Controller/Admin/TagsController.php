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
     * @Route("/", methods="GET", name="admin_tag_index")
     */
    public function index(TagRepository $tags): Response
    {
        $allTags = $tags->findAll();

        return $this->render('admin/crud/index.html.twig', ['tags' => $allTags]);
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

        return $this->render('admin/crud/new.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}", methods="GET", name="admin_tag_show")
     */
    public function show(Tag $tag): Response
    {
        return $this->render('admin/crud/show.html.twig', [
            'tag' => $tag,
        ]);
    }

    /**
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_tag_edit")
     */
    // @IsGranted("edit", subject="tag", message="Tags can only be edited by their authors.")
    public function edit(Request $request, Tag $tag): Response
    {
        $form = $this->createForm(TagType::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_tag_edit', ['id' => $tag->getId()]);
        }

        return $this->render('admin/crud/edit.html.twig', [
            'tag' => $tag,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", methods="POST", name="admin_tag_delete")
     */
    // @IsGranted("delete", subject="tag")
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
