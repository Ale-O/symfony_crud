<?php

namespace App\Controller\Api;

use App\Entity\DateFields;
use App\Entity\TextFields;
use App\Repository\DateFieldsRepository;
use App\Repository\TextFieldsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api")
 */
class CrudController extends AbstractController
{
    /**
     * @Route("/all_users", methods="GET", name="all_users_api")
     */
    public function showAllUsers(UserRepository $users, SerializerInterface $serializer): JsonResponse
    {
        $allUsers = $users->findAll();
        $jsonAllUsers = $serializer->serialize($allUsers, 'json');

        return new JsonResponse($jsonAllUsers, Response::HTTP_OK, [], true);
    }

    /**
     * @Route("/users/{id}", methods="GET", name="users_api")
     */
    public function showUser(int $id, UserRepository $users, SerializerInterface $serializer): JsonResponse
    {
        $focusUsers = $users->find($id);
        $jsonUsers = $serializer->serialize($focusUsers, 'json');

        return new JsonResponse($jsonUsers, Response::HTTP_OK, [], true);
    }

    /**
     * @Route("/textFields/{id}", methods="GET", name="textFields_api")
     */
    public function showTextFields(int $id, TextFieldsRepository $textFields, SerializerInterface $serializer): JsonResponse
    {
        $focusTextFields = $textFields->find($id);
        $jsonTextFields = $serializer->serialize($focusTextFields, 'json', ['groups' => ['text_fields_info']]);

        return new JsonResponse($jsonTextFields, Response::HTTP_OK, [], true);
    }

    /**
     * @Route("/textFields/{id}/edit", methods="PUT", name="textFields_api_edit")
     */
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

    /**
     * @Route("/dateFields/{id}", methods="GET", name="dateFields_api")
     */
    public function showDateFields(int $id, DateFieldsRepository $dateFields, SerializerInterface $serializer): JsonResponse
    {
        $focusDateFields = $dateFields->find($id);
        $jsonDateFields = $serializer->serialize($focusDateFields, 'json', ['groups' => ['date_fields_info']]);

        return new JsonResponse($jsonDateFields, Response::HTTP_OK, [], true);
    }

    /**
     * @Route("/dateFields/{id}/edit", methods="PUT", name="dateFields_api_edit")
     */
    public function editDateFields(Request $request, int $id, DateFields $dateFields, SerializerInterface $serializer, EntityManagerInterface $em): JsonResponse
    {
        $updateDateFields = $serializer->deserialize($request->getContent(), DateFields::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $dateFields]);

        $data = $request->toArray();
        $content = $data['content'] ?? -1;
        $updateDateFields->setContent($content);

        $em->persist($updateDateFields);
        $em->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
