<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserNewType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class SecurityController extends AbstractController
{
    use TargetPathTrait;

    /**
     * @Route("/login", name="security_login")
     */
    public function login(Request $request, Security $security, AuthenticationUtils $helper): Response
    {
        if ($security->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('crud_index');
        }

        $this->saveTargetPath($request->getSession(), 'main', $this->generateUrl('crud_index'));

        return $this->render('security/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }

    /**
     * @Route("/new", methods="GET|POST", name="user_new")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();

        $form = $this->createForm(UserNewType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($encoder->encodePassword($user, $form->get('password')->getData()));
            $user->setRoles(['ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            return $this->redirectToRoute('security_login');
        }

        return $this->render('security/user_new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}
