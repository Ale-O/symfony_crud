<?php

namespace App\Controller\Admin;

use App\Entity\DateFields;
use App\Entity\Element;
use App\Entity\FileFields;
use App\Entity\NumberFields;
use App\Entity\Subelement;
use App\Entity\SubelementFields;
use App\Entity\TextFields;
use App\Event\SubelementCreatedEvent;
use App\Form\ElementType;
use App\Form\SubelementType;
use App\Repository\ElementRepository;
use App\Repository\SubelementRepository;
use App\Repository\TagRepository;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
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
     * @Route("/", defaults={"page": "1", "_format"="html"}, methods="GET", name="admin_index")
     * @Route("/", defaults={"page": "1", "_format"="html"}, methods="GET", name="admin_element_index")
     * @Route("/page/{page<[1-9]\d*>}", defaults={"_format"="html"}, methods="GET", name="admin_index_paginated")
     * @Cache(smaxage="10")
     */
    public function index(Request $request, int $page, string $_format, ElementRepository $elements, TagRepository $tags): Response
    {
        $tag = null;

        if ($request->query->has('tag')) {
            $tag = $tags->findOneBy(['name' => $request->query->get('tag')]);
        }

        $latestElements = $elements->findLatest($page, $tag);

        return $this->render('admin/crud/index.'.$_format.'.twig', [
            'paginator' => $latestElements,
            'tagName' => $tag ? $tag->getName() : null,
        ]);
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

            $this->addFlash('success', 'action.created_successfully');

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
     * @Route("/{id<\d+>}", defaults={"page": "1"}, methods="GET", name="admin_element_show")
     * @Route("/{id<\d+>}/page/{page<[1-9]\d*>}", methods="GET", name="admin_element_paginated")
     * @Cache(smaxage="10")
     */
    public function show(Request $request, Element $element, int $page, SubelementRepository $subelements, TagRepository $tags): Response
    {
        $tag = null;

        if ($request->query->has('tag')) {
            $tag = $tags->findOneBy(['name' => $request->query->get('tag')]);
        }

        $latestSubelements = $subelements->findLatest($page, $element, $tag);

        return $this->render('admin/crud/show.html.twig', [
            'element' => $element,
            'paginator' => $latestSubelements,
            'tagName' => $tag ? $tag->getName() : null,
            'idElement' => $element->getId(),
        ]);
    }

    /**
     * @Route("/{id<\d+>}/edit", methods="GET|POST", name="admin_element_edit")
     */
    public function edit(Request $request, Element $element): Response
    {
        $form = $this->createForm(ElementType::class, $element);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_element_edit', ['id' => $element->getId()]);
        }

        return $this->render('admin/crud/edit.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", methods="POST", name="admin_element_delete")
     */
    public function delete(Request $request, Element $element): Response
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_index');
        }

        $em = $this->getDoctrine()->getManager();

        $element->getTags()->clear();

        $subelements = $element->getSubelements();
        foreach ($subelements as $subelement) {
            $subelement->getTags()->clear();
        }

        $em->remove($element);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_index');
    }

    /**
     * @Route("admin/subelement/{id}/new", methods="POST", name="admin_subelement_new")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function subelementNew(Request $request, Element $element, EventDispatcherInterface $eventDispatcher): Response
    {
        $subelement = new Subelement();
        $subelement->setAuthor($this->getUser());
        $element->addSubelement($subelement);

        $form = $this->createForm(SubelementType::class, $subelement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subelement);
            $em->flush();

            $eventDispatcher->dispatch(new SubelementCreatedEvent($subelement));

            $arrayTextFields = $element->getTextFields();
            $arrayDateFields = $element->getDateFields();
            $arrayNumberFields = $element->getNumberFields();
            $arrayFileFields = $element->getFileFields();
            $arraySubelementFields = $element->getSubelementFields();

            foreach ($arrayTextFields as $field) {
                $textfields = new TextFields();
                $textfields->setSubelement($subelement);
                $textfields->setTitle($field->getTitle());
                $textfields->setContent('...');
                $textfields->setPosition($field->getPosition());
                $textfields->setParentFields($field);
                $em->persist($textfields);
                $em->flush();
            }

            foreach ($arrayDateFields as $field) {
                $datefields = new DateFields();
                $datefields->setSubelement($subelement);
                $datefields->setTitle($field->getTitle());
                $datefields->setContent(new DateTime());
                $datefields->setPosition($field->getPosition());
                $datefields->setParentFields($field);
                $em->persist($datefields);
                $em->flush();
            }

            foreach ($arrayNumberFields as $field) {
                $numberfields = new NumberFields();
                $numberfields->setSubelement($subelement);
                $numberfields->setTitle($field->getTitle());
                $numberfields->setContent(0);
                $numberfields->setPosition($field->getPosition());
                $numberfields->setParentFields($field);
                $em->persist($numberfields);
                $em->flush();
            }

            foreach ($arrayFileFields as $field) {
                $filefields = new FileFields();
                $filefields->setSubelement($subelement);
                $filefields->setTitle($field->getTitle());
                $filefields->setContent('file.pdf');
                $filefields->setPosition($field->getPosition());
                $filefields->setParentFields($field);
                $em->persist($filefields);
                $em->flush();
            }

            foreach ($arraySubelementFields as $field) {
                $subelementfields = new SubelementFields();
                $subelementfields->setSubelement($subelement);
                $subelementfields->setTitle($field->getTitle());
                // $subelementfields->setContent();
                $subelementfields->setPosition($field->getPosition());
                $subelementfields->setFilter($field->getFilter());
                $subelementfields->setParentFields($field);
                $em->persist($subelementfields);
                $em->flush();
            }

            return $this->redirectToRoute('admin_subelement_show', ['id' => $subelement->getId()]);
        }

        return $this->render('admin/crud/subelement/subelement_form_error.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    public function subelementForm(Element $element): Response
    {
        $form = $this->createForm(SubelementType::class, null, ['role' => ['ROLE_USER']]);

        return $this->render('admin/crud/subelement/_subelement_form.html.twig', [
            'element' => $element,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/subelement/{id<\d+>}", methods="GET", name="admin_subelement_show")
     */
    public function subelementShow(Subelement $subelement): Response
    {
        $element = $subelement->getElement();
        $idElement = $element->getId();

        $arrayTextFields = $subelement->getTextFields();
        $arrayDateFields = $subelement->getDateFields();
        $arrayNumberFields = $subelement->getNumberFields();
        $arrayFileFields = $subelement->getFileFields();
        $arraySubelementFields = $subelement->getSubelementFields();

        $fields = [];

        foreach ($arrayTextFields as $field) {
            $field->type = 'text';
            array_push($fields, $field);
        }
        foreach ($arrayDateFields as $field) {
            $field->type = 'date';
            array_push($fields, $field);
        }
        foreach ($arrayNumberFields as $field) {
            $field->type = 'number';
            array_push($fields, $field);
        }
        foreach ($arrayFileFields as $field) {
            $field->type = 'file';
            array_push($fields, $field);
        }
        foreach ($arraySubelementFields as $field) {
            $field->type = 'subelement';
            array_push($fields, $field);
        }

        return $this->render('admin/crud/subelement/subelement_show.html.twig', [
            'subelement' => $subelement,
            'idElement' => $idElement,
            'fields' => $fields,
        ]);
    }

    /**
     * @Route("editFields/{id<\d+>}}", methods="GET", name="admin_subelement_edit_fields")
     */
    public function subelementEditFields(Subelement $subelement): Response
    {
        $element = $subelement->getElement();
        $idElement = $element->getId();
        isset($_GET['anchor']) ? $anchor = $_GET['anchor'] : $anchor = null;

        $arrayTextFields = $subelement->getTextFields();
        $arrayDateFields = $subelement->getDateFields();
        $arrayNumberFields = $subelement->getNumberFields();
        $arrayFileFields = $subelement->getFileFields();
        $arraySubelementFields = $subelement->getSubelementFields();

        $fields = [];

        foreach ($arrayTextFields as $field) {
            $field->type = 'text';
            array_push($fields, $field);
        }
        foreach ($arrayDateFields as $field) {
            $field->type = 'date';
            array_push($fields, $field);
        }
        foreach ($arrayNumberFields as $field) {
            $field->type = 'number';
            array_push($fields, $field);
        }
        foreach ($arrayFileFields as $field) {
            $field->type = 'file';
            array_push($fields, $field);
        }
        foreach ($arraySubelementFields as $field) {
            $field->type = 'subelement';
            array_push($fields, $field);
        }

        return $this->render('admin/crud/subelement/subelement_edit_fields.html.twig', [
            'subelement' => $subelement,
            'idElement' => $idElement,
            'fields' => $fields,
            'anchor' => $anchor,
        ]);
    }

    /**
     * @Route("subelement/{id<\d+>}/edit", methods="GET|POST", name="admin_subelement_edit")
     */
    public function subelementEdit(Request $request, Subelement $subelement): Response
    {
        $form = $this->createForm(SubelementType::class, $subelement, ['role' => ['ROLE_ADMIN']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'action.updated_successfully');

            return $this->redirectToRoute('admin_subelement_edit', ['id' => $subelement->getId()]);
        }

        return $this->render('admin/crud/subelement/subelement_edit.html.twig', [
            'subelement' => $subelement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/subelement/delete", methods="POST", name="admin_subelement_delete")
     */
    public function subelementDelete(Request $request, Subelement $subelement): Response
    {
        $element = $subelement->getElement();
        $idElement = $element->getId();

        if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($subelement);
        $em->flush();

        $this->addFlash('success', 'action.deleted_successfully');

        return $this->redirectToRoute('admin_element_show', ['id' => $idElement]);
    }
}
