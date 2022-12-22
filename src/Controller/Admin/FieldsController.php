<?php

namespace App\Controller\Admin;

use App\Entity\DateFields;
use App\Entity\Element;
use App\Entity\NumberFields;
use App\Entity\TextFields;
use App\Form\DateFieldsAdminType;
use App\Form\NumberFieldsAdminType;
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

            $subelements = $element->getSubelements();
            foreach ($subelements as $subelement) {
                $newTextfields = new TextFields();
                $newTextfields->setSubelement($subelement);
                $newTextfields->setTitle($textfields->getTitle());
                $newTextfields->setContent('...');
                $newTextfields->setPosition($textfields->getPosition());
                $newTextfields->setParentFields($textfields);
                $em->persist($newTextfields);
                $em->flush();
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

            $subelements = $element->getSubelements();
            foreach ($subelements as $subelement) {
                $newDatefields = new DateFields();
                $newDatefields->setSubelement($subelement);
                $newDatefields->setTitle($datefields->getTitle());
                $newDatefields->setContent(new DateTime());
                $newDatefields->setPosition($datefields->getPosition());
                $newDatefields->setParentFields($datefields);
                $em->persist($newDatefields);
                $em->flush();
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
     * @Route("numberfields/{elementSlug}/new", methods="GET|POST", name="admin_numberfields_new")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
     */
    public function newNumberFields(Request $request, Element $element): Response
    {
        $idElement = $element->getId();

        $numberfields = new NumberFields();
        $numberfields->setElement($element);
        $numberfields->setContent(0);

        $form = $this->createForm(NumberFieldsAdminType::class, $numberfields)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($numberfields);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_numberfields_new');
            }

            $subelements = $element->getSubelements();
            foreach ($subelements as $subelement) {
                $newNumberfields = new NumberFields();
                $newNumberfields->setSubelement($subelement);
                $newNumberfields->setTitle($numberfields->getTitle());
                $newNumberfields->setContent(0);
                $newNumberfields->setPosition($numberfields->getPosition());
                $newNumberfields->setParentFields($numberfields);
                $em->persist($newNumberfields);
                $em->flush();
            }

            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        return $this->render('admin/fields/numberfields_new.html.twig', [
            'numberfields' => $numberfields,
            'form' => $form->createView(),
            'element' => $element,
        ]);
    }

    /**
     * @Route("textfields/{id<\d+>}", methods="GET", name="admin_textfields_show")
     */
    public function showTextFields(TextFields $textfields): Response
    {
        return $this->render('admin/fields/textfields_show.html.twig', [
            'textfields' => $textfields,
        ]);
    }

    /**
     * @Route("datefields/{id<\d+>}", methods="GET", name="admin_datefields_show")
     */
    public function showDateFields(DateFields $datefields): Response
    {
        return $this->render('admin/fields/datefields_show.html.twig', [
            'datefields' => $datefields,
        ]);
    }

    /**
     * @Route("numberfields/{id<\d+>}", methods="GET", name="admin_numberfields_show")
     */
    public function showNumberFields(NumberFields $numberfields): Response
    {
        return $this->render('admin/fields/numberfields_show.html.twig', [
            'numberfields' => $numberfields,
        ]);
    }

    /**
     * @Route("textfields/{id<\d+>}/edit", methods="GET|POST", name="admin_textfields_edit")
     */
    // @IsGranted("edit", subject="textfields", message="TextFieldss can only be edited by their authors.")
    public function editTextFields(Request $request, TextFields $textfields): Response
    {
        $element = $textfields->getElement();

        $form = $this->createForm(TextFieldsAdminType::class, $textfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            $em = $this->getDoctrine()->getManager();

            $childTextfields = $textfields->getChildFields();
            foreach ($childTextfields as $childTextfield) {
                $childTextfield->setTitle($textfields->getTitle());
                $childTextfield->setPosition($textfields->getPosition());
                $em->persist($childTextfield);
                $em->flush();
            }

            return $this->redirectToRoute('admin_textfields_edit', ['id' => $textfields->getId()]);
        }

        return $this->render('admin/fields/textfields_edit.html.twig', [
            'textfields' => $textfields,
            'form' => $form->createView(),
            'element' => $element,
        ]);
    }

    /**
     * @Route("datefields/{id<\d+>}/edit", methods="GET|POST", name="admin_datefields_edit")
     */
    // @IsGranted("edit", subject="datefields", message="DateFields can only be edited by their authors.")
    public function editDateFields(Request $request, DateFields $datefields): Response
    {
        $element = $datefields->getElement();

        $form = $this->createForm(DateFieldsAdminType::class, $datefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            $em = $this->getDoctrine()->getManager();

            $childDatefields = $datefields->getChildFields();
            foreach ($childDatefields as $childDatefield) {
                $childDatefield->setTitle($datefields->getTitle());
                $childDatefield->setPosition($datefields->getPosition());
                $em->persist($childDatefield);
                $em->flush();
            }

            return $this->redirectToRoute('admin_datefields_edit', ['id' => $datefields->getId()]);
        }

        return $this->render('admin/fields/datefields_edit.html.twig', [
            'datefields' => $datefields,
            'form' => $form->createView(),
            'element' => $element,
        ]);
    }

    /**
     * @Route("numberfields/{id<\d+>}/edit", methods="GET|POST", name="admin_numberfields_edit")
     */
    // @IsGranted("edit", subject="numberfields", message="NumberFields can only be edited by their authors.")
    public function editNumberFields(Request $request, NumberFields $numberfields): Response
    {
        $element = $numberfields->getElement();

        $form = $this->createForm(NumberFieldsAdminType::class, $numberfields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            $em = $this->getDoctrine()->getManager();

            $childDatefields = $numberfields->getChildFields();
            foreach ($childDatefields as $childDatefield) {
                $childDatefield->setTitle($numberfields->getTitle());
                $childDatefield->setPosition($numberfields->getPosition());
                $em->persist($childDatefield);
                $em->flush();
            }

            return $this->redirectToRoute('admin_numberfields_edit', ['id' => $numberfields->getId()]);
        }

        return $this->render('admin/fields/numberfields_edit.html.twig', [
            'numberfields' => $numberfields,
            'form' => $form->createView(),
            'element' => $element,
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

        $childTextfields = $textfields->getChildFields();
        foreach ($childTextfields as $childTextfield) {
            $em->remove($childTextfield);
            $em->flush();
        }

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

        $childDatefields = $datefields->getChildFields();
        foreach ($childDatefields as $childDatefield) {
            $em->remove($childDatefield);
            $em->flush();
        }

        $em->remove($datefields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }

    /**
     * @Route("numberfields/{id}/delete", methods="POST", name="admin_numberfields_delete")
     */
    // @IsGranted("delete", subject="numberfields")
    public function deleteNumberFields(Request $request, NumberFields $numberfields): Response
    {
        $element = $numberfields->getElement();
        $idElement = $element->getId();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        $em = $this->getDoctrine()->getManager();

        $childDatefields = $numberfields->getChildFields();
        foreach ($childDatefields as $childDatefield) {
            $em->remove($childDatefield);
            $em->flush();
        }

        $em->remove($numberfields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }
}
