<?php

namespace App\Controller;

use App\Entity\DateFields;
use App\Entity\FileFields;
use App\Entity\NumberFields;
use App\Entity\SubelementFields;
use App\Entity\TextFields;
use App\Form\DateFieldsType;
use App\Form\FileFieldsType;
use App\Form\NumberFieldsType;
use App\Form\SubelementFieldsType;
use App\Form\TextFieldsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/fields")
 */
class FieldsController extends AbstractController
{
    public function textFieldsForm(TextFields $textfields): Response
    {
        $form = $this->createForm(TextFieldsType::class, $textfields);

        return $this->render('crud/fields/_textfields_form.html.twig', [
            'textfields' => $textfields,
            'form' => $form->createView(),
        ]);
    }

    public function dateFieldsForm(DateFields $datefields): Response
    {
        $form = $this->createForm(DateFieldsType::class, $datefields);

        return $this->render('crud/fields/_datefields_form.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
        ]);
    }

    public function numberFieldsForm(NumberFields $numberfields): Response
    {
        $form = $this->createForm(NumberFieldsType::class, $numberfields);

        return $this->render('crud/fields/_numberfields_form.html.twig', [
            'numberfields' => $numberfields,
            'form' => $form->createView(),
        ]);
    }

    public function fileFieldsForm(FileFields $filefields): Response
    {
        $form = $this->createForm(FileFieldsType::class, $filefields);

        return $this->render('crud/fields/_filefields_form.html.twig', [
            'filefields' => $filefields,
            'form' => $form->createView(),
        ]);
    }

    public function subelementFieldsForm(SubelementFields $subelementfields): Response
    {
        $form = $this->createForm(SubelementFieldsType::class, $subelementfields);

        return $this->render('crud/fields/_subelementfields_form.html.twig', [
            'subelementfields' => $subelementfields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("textfields/{id<\d+>}/edit", methods="GET|POST", name="textfields_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function textFieldsEdit(Request $request, TextFields $textfields): Response
    {
        $subelement = $textfields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(TextFieldsType::class, $textfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/textfields_form_error.html.twig', [
            'textfields' => $textfields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("datefields/{id<\d+>}/edit", methods="GET|POST", name="datefields_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function dateFieldsEdit(Request $request, DateFields $datefields): Response
    {
        $subelement = $datefields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(DateFieldsType::class, $datefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/datefields_form_error.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("numberfields/{id<\d+>}/edit", methods="GET|POST", name="numberfields_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function numberFieldsEdit(Request $request, NumberFields $numberfields): Response
    {
        $subelement = $numberfields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(NumberFieldsType::class, $numberfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/numberfields_form_error.html.twig', [
            'numberfields' => $numberfields,
            'form' => $form->createView(),
        ]);
    }

    public function oldfileFieldsEdit(Request $request, FileFields $filefields): Response
    {
        $subelement = $filefields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(FileFieldsType::class, $filefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/filefields_form_error.html.twig', [
            'filefields' => $filefields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("subelementfields/{id<\d+>}/edit", methods="GET|POST", name="subelementfields_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function subelementFieldsEdit(Request $request, SubelementFields $subelementfields): Response
    {
        $subelement = $subelementfields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(SubelementFieldsType::class, $subelementfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/subelementfields_form_error.html.twig', [
            'subelementfields' => $subelementfields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("filefields/{id<\d+>}/edit", methods="GET|POST", name="filefields_edit")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function fileFieldsEdit(Request $request, FileFields $filefields, SluggerInterface $slugger)
    {
        $subelement = $filefields->getSubelement();
        $idSubelement = $subelement->getId();

        $form = $this->createForm(FileFieldsType::class, $filefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $file */
            $file = $form->get('content')->getData();

            if ($file) {
                $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('files_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    return $this->redirectToRoute('subelement_show', ['id' => $idSubelement]);
                }

                $filefields->setContent($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($filefields);
            $em->flush();

            $user = $this->getUser();
            isset($user) ? $roles = $user->getRoles() : $roles = '';

            if ($roles[0] === 'ROLE_ADMIN') {
                return $this->redirectToRoute('admin_subelement_edit_fields', ['id' => $idSubelement]);
            } else {
                return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
            }
        }

        return $this->render('crud/fields/filefields_form_error.html.twig', [
            'filefields' => $filefields,
            'form' => $form,
        ]);
    }
}
