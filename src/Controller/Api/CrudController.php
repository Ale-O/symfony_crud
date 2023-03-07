<?php

namespace App\Controller\Api;

use App\Entity\TextFields;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api")
 */
class CrudController extends AbstractController
{
    /*
     * @Route("/textFields/{id}/edit", methods="PUT", name="textFields_api_edit")
     */

     /* API Project
    public function editTextFields(Request $request, int $id, TextFields $textFields, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $updateTextFields = $serializer->deserialize($request->getContent(), TextFields::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $textFields]);

        $data = $request->toArray();
        $content = $data['content'] ?? -1;
        $updateTextFields->setContent($content);

        $em->persist($updateTextFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
    */
}
