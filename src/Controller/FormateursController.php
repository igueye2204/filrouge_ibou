<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormateursController extends AbstractController
{
    /**
    * @Route(
    * name="formateurs_liste",
    * path="api/formateurs",
    * methods={"GET"},
    * defaults={
    * "_controller"="\app\ControllerFormateursController::getFormateur",
    * "_api_resource_class"=User::class,
    * "_api_collection_operation_name"="get_formateurs"
    * }
    * )
    */
    public function getFormateur(SerializerInterface $serializer ,UserRepository $repo)
    {
        $formateurs= $repo->findByProfil("FORMATEUR");
        $formateursJson =$serializer->serialize($formateurs,"json",
        [
        "groups"=>["formateur:read"]
        ]
        );
            return new JsonResponse($formateursJson,Response::HTTP_OK,[],true);
    }

}
    