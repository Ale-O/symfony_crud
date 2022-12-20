<?php

namespace App\Controller\Admin;

use App\Entity\Tag;
use App\Entity\User;
use App\Form\UserEditType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/admin/Users")
 * @IsGranted("ROLE_ADMIN")
 */
class UsersController extends AbstractController
{
    /**
     * @Route("/", defaults={"page": "1"}, methods="GET", name="admin_user_index")
     * @Route("/page/{page<[1-9]\d*>}", methods="GET", name="admin_user_paginated")
     */
    public function index(UserRepository $users, int $page): Response
    {
        $allUsers = $users->findOrderByName($page);

        return $this->render('admin/user/users_list.html.twig', [
            'paginator' => $allUsers,
        ]);
    }

    /**
     * @Route("/new", methods="GET|POST", name="admin_user_new")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder, ManagerRegistry $doctrine): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($encoder->encodePassword($user, $form->get('password')->getData()));
            $user->setRoles([($form->get('isAdmin')->getData()) ? 'ROLE_ADMIN' : 'ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_user_new');
            }

            $entityManager = $doctrine->getManager();
            $tag = new Tag();
            $name = $user->getUsername();
            $tag->setName(strval($name));
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->redirectToRoute('admin_user_index');
        }

        return $this->render('admin/user/user_new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}", methods="GET", name="admin_user_show")
     */
    public function show(User $user): Response
    {
        return $this->render('admin/user/user_show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_user_edit")
     */
    // @IsGranted("edit", subject="user", message="Users can only be edited by their authors.")
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_user_edit', ['id' => $user->getId()]);
        }

        return $this->render('admin/user/user_edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", methods="POST", name="admin_user_delete")
     */
    // @IsGranted("delete", subject="user")
    public function delete(Request $request, User $user): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_user_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_user_index');
    }

    /**
     * @Route("/{id<\d+>}/level_up", methods="GET|POST", name="admin_user_level_up")
     */
    // @IsGranted("level_up", subject="user", message="Users can only be edited by their authors.")
    public function levelUp(User $user): Response
    {
        $user->setRoles(['ROLE_ADMIN']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'action.level_up_successfully');

        return $this->render('admin/user/user_show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id<\d+>}/level_down", methods="GET|POST", name="admin_user_level_down")
     */
    // @IsGranted("level_down", subject="user", message="Users can only be edited by their authors.")
    public function levelDown(User $user): Response
    {
        $user->setRoles(['ROLE_USER']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'action.level_down_successfully');

        return $this->render('admin/user/user_show.html.twig', [
            'user' => $user,
        ]);
    }
}
