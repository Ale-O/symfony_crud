<?php

namespace App\Controller;

use App\Entity\DateFields;
use App\Entity\TextFields;
use App\Form\DateFieldsType;
use App\Form\TextFieldsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

            return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
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

            return $this->redirectToRoute('subelement_edit_fields', ['id' => $idSubelement]);
        }

        return $this->render('crud/fields/datefields_form_error.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
        ]);
    }
}
