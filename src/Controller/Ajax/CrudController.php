<?php

namespace App\Controller\Ajax;

use App\Entity\DateFields;
use App\Entity\FileFields;
use App\Entity\NumberFields;
use App\Entity\SubelementFields;
use App\Entity\TextFields;
use App\Repository\SubelementRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/ajax")
 */
class CrudController extends AbstractController
{
    /**
     * @Route("/textFieldsAjax/{id}/edit", methods="PUT", name="textfields_edit_ajax")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function textFieldsEditAjax(Request $request, int $id, TextFields $textFields, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $updateTextFields = $serializer->deserialize($request->getContent(), TextFields::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $textFields]);

        $data = $request->toArray();
        $content = $data['content'] ?? -1;
        $updateTextFields->setContent($content);

        $em->persist($updateTextFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/dateFieldsAjax/{id}/edit", methods="PUT", name="datefields_edit_ajax")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function dateFieldsEditAjax(Request $request, int $id, DateFields $dateFields, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $updateDateFields = $serializer->deserialize($request->getContent(), DateFields::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $dateFields]);

        $data = $request->toArray();
        $content = new DateTime($data['content'] ?? -1);
        $updateDateFields->setContent($content);

        $em->persist($updateDateFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/numberFieldsAjax/{id}/edit", methods="PUT", name="numberfields_edit_ajax")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function numberFieldsEditAjax(Request $request, int $id, NumberFields $numberFields, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $updateNumberFields = $serializer->deserialize($request->getContent(), NumberFields::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $numberFields]);

        $data = $request->toArray();
        $content = $data['content'] ?? -1;
        $updateNumberFields->setContent($content);

        $em->persist($updateNumberFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/fileFieldsAjax/{id}/edit", methods="POST", name="filefields_edit_ajax")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function fileFieldsEditAjax(Request $request, int $id, FileFields $fileFields, EntityManagerInterface $em, SluggerInterface $slugger): JsonResponse
    {
        $file = $request->files->get('upload');
        $status = ['status' => 'success', 'fileUploaded' => false];

        if (!is_null($file)) {
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($filename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('files_directory'),
                $newFilename
            );
            $status = ['status' => 'success', 'fileUploaded' => true];
            $fileFields->setContent($newFilename);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($fileFields);
        $em->flush();

        return new JsonResponse($status);
    }

    /**
     * @Route("/subelementFieldsAjax/{id}/edit", methods="PUT", name="subelementfields_edit_ajax")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     */
    public function subelementFieldsEditAjax(Request $request, int $id, SubelementFields $subelementFields, SubelementRepository $subelement, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $data = $request->toArray();
        $content = $data['content'] ?? -1;
        $subelementContent = $subelement->find($content);
        $subelementFields->setContent($subelementContent);

        $em->persist($subelementFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
