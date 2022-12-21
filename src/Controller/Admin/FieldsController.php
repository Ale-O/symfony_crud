<?php

namespace App\Controller\Admin;

use App\Entity\DateFields;
use App\Entity\Element;
use App\Entity\TextFields;
use App\Form\DateFieldsAdminType;
use App\Form\TextFieldsAdminType;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/fields")
 */
class FieldsController extends AbstractController
{
    /**
     * @Route("textfields/{elementSlug}/new", methods="GET|POST", name="admin_textfields_new")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
     */
    public function newTextFields(Request $request, Element $element): Response
    {
        $idElement = $element->getId();

        $textfields = new TextFields();
        $textfields->setElement($element);
        $textfields->setContent('master fields');

        $form = $this->createForm(TextFieldsAdminType::class, $textfields)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($textfields);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_textfields_new');
            }

            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        return $this->render('admin/fields/textfields_new.html.twig', [
            'textfields' => $textfields,
            'form' => $form->createView(),
            'element' => $element,
        ]);
    }

    /**
     * @Route("datefields/{elementSlug}/new", methods="GET|POST", name="admin_datefields_new")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
     */
    public function newDateFields(Request $request, Element $element): Response
    {
        $idElement = $element->getId();

        $datefields = new DateFields();
        $datefields->setElement($element);
        $datefields->setContent(new DateTime());

        $form = $this->createForm(DateFieldsAdminType::class, $datefields)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($datefields);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_datefields_new');
            }

            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        return $this->render('admin/fields/datefields_new.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
            'element' => $element,
        ]);
    }

    /**
     * @Route("textfields/{id<\d+>}/edit", methods="GET|POST", name="admin_textfields_edit")
     */
    // @IsGranted("edit", subject="textfields", message="TextFieldss can only be edited by their authors.")
    public function editTextFields(Request $request, TextFields $textfields): Response
    {
        $form = $this->createForm(TextFieldsAdminType::class, $textfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_textfields_edit', ['id' => $textfields->getId()]);
        }

        return $this->render('admin/fields/textfields_edit.html.twig', [
            'textfields' => $textfields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("datefields/{id<\d+>}/edit", methods="GET|POST", name="admin_datefields_edit")
     */
    // @IsGranted("edit", subject="datefields", message="DateFields can only be edited by their authors.")
    public function editDateFields(Request $request, DateFields $datefields): Response
    {
        $form = $this->createForm(DateFieldsAdminType::class, $datefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_datefields_edit', ['id' => $datefields->getId()]);
        }

        return $this->render('admin/fields/datefields_edit.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("textfields/{id}/delete", methods="POST", name="admin_textfields_delete")
     */
    // @IsGranted("delete", subject="textfields")
    public function deleteTextFields(Request $request, TextFields $textfields): Response
    {
        $element = $textfields->getElement();
        $idElement = $element->getId();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($textfields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }

    /**
     * @Route("datefields/{id}/delete", methods="POST", name="admin_datefields_delete")
     */
    // @IsGranted("delete", subject="datefields")
    public function deleteDateFields(Request $request, DateFields $datefields): Response
    {
        $element = $datefields->getElement();
        $idElement = $element->getId();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($datefields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }
}
