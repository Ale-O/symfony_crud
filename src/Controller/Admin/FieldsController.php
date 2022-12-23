<?php

namespace App\Controller\Admin;

use App\Entity\DateFields;
use App\Entity\Element;
use App\Entity\FileFields;
use App\Entity\NumberFields;
use App\Entity\TextFields;
use App\Form\DateFieldsAdminType;
use App\Form\FileFieldsAdminType;
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
     * @Route("filefields/{elementSlug}/new", methods="GET|POST", name="admin_filefields_new")
     * @ParamConverter("element", options={"mapping": {"elementSlug": "slug"}})
     */
    public function newFileFields(Request $request, Element $element): Response
    {
        $idElement = $element->getId();

        $filefields = new FileFields();
        $filefields->setElement($element);
        $filefields->setContent('master fields');

        $form = $this->createForm(FileFieldsAdminType::class, $filefields)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($filefields);
            $em->flush();

            $this->addFlash('success', 'action.created_successfully');

            if ($form->get('saveAndCreateNew')->isClicked()) {
                return $this->redirectToRoute('admin_filefields_new');
            }

            $subelements = $element->getSubelements();
            foreach ($subelements as $subelement) {
                $newFilefields = new FileFields();
                $newFilefields->setSubelement($subelement);
                $newFilefields->setTitle($filefields->getTitle());
                $newFilefields->setContent('file.pdf');
                $newFilefields->setPosition($filefields->getPosition());
                $newFilefields->setParentFields($filefields);
                $em->persist($newFilefields);
                $em->flush();
            }

            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        return $this->render('admin/fields/filefields_new.html.twig', [
            'filefields' => $filefields,
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
     * @Route("filefields/{id<\d+>}", methods="GET", name="admin_filefields_show")
     */
    public function showFileFields(FileFields $filefields): Response
    {
        return $this->render('admin/fields/filefields_show.html.twig', [
            'filefields' => $filefields,
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

            $childNumberfields = $numberfields->getChildFields();
            foreach ($childNumberfields as $childNumberfield) {
                $childNumberfield->setTitle($numberfields->getTitle());
                $childNumberfield->setPosition($numberfields->getPosition());
                $em->persist($childNumberfield);
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
     * @Route("filefields/{id<\d+>}/edit", methods="GET|POST", name="admin_filefields_edit")
     */
    // @IsGranted("edit", subject="filefields", message="FileFields can only be edited by their authors.")
    public function editFileFields(Request $request, FileFields $filefields): Response
    {
        $element = $filefields->getElement();

        $form = $this->createForm(FileFieldsAdminType::class, $filefields);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            $em = $this->getDoctrine()->getManager();

            $childFilefields = $filefields->getChildFields();
            foreach ($childFilefields as $childFilefields) {
                $childFilefields->setTitle($filefields->getTitle());
                $childFilefields->setPosition($filefields->getPosition());
                $em->persist($childFilefields);
                $em->flush();
            }

            return $this->redirectToRoute('admin_filefields_edit', ['id' => $filefields->getId()]);
        }

        return $this->render('admin/fields/filefields_edit.html.twig', [
            'filefields' => $filefields,
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

        $childNumberfields = $numberfields->getChildFields();
        foreach ($childNumberfields as $childNumberfield) {
            $em->remove($childNumberfield);
            $em->flush();
        }

        $em->remove($numberfields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }

    /**
     * @Route("filefields/{id}/delete", methods="POST", name="admin_filefields_delete")
     */
    // @IsGranted("delete", subject="filefields")
    public function deleteFileFields(Request $request, FileFields $filefields): Response
    {
        $element = $filefields->getElement();
        $idElement = $element->getId();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        $em = $this->getDoctrine()->getManager();

        $childFilefields = $filefields->getChildFields();
        foreach ($childFilefields as $childFilefield) {
            $em->remove($childFilefield);
            $em->flush();
        }

        $em->remove($filefields);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }
}
