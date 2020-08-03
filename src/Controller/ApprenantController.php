<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApprenantController extends AbstractController
{
   
    /**
    * @Route(
    * name="apprenant_liste",
    * path="api/apprenants",
    * methods={"GET"},
    * defaults={
    * "_controller"="\app\ControllerApprenantController::getApprenant",
    * "_api_resource_class"=User::class,
    * "_api_collection_operation_name"="get_apprenants"
    * }
    * )
    */
    public function getApprenant(SerializerInterface $serializer ,UserRepository $repo)
    {
        $apprenants= $repo->findByProfil("APPRENANT");
        $apprenantsJson =$serializer->serialize($apprenants,"json",
        [
        "groups"=>["apprenant:read"]
        ]
        );
            return new JsonResponse($apprenantsJson,Response::HTTP_OK,[],true);
    }
    /**
    * @Route(
    * name="update_apprenants",
    * path="api/apprenants",
    * methods={"GET"},
    * defaults={
    * "_controller"="\app\ControllerApprenantController::updateApprenant",
    * "_api_resource_class"=User::class,
    * "_api_collection_operation_name"="update_apprenants"
    * }
    * )
    */
    public function updateApprenant(SerializerInterface $serializer ,UserRepository $repo)
    {
        $apprenants= $repo->findById("APPRENANT");
        $apprenantsJson =$serializer->serialize($apprenants,"json",
        [
        "groups"=>["apprenant:read"]
        ]
        );
            return new JsonResponse($apprenantsJson,Response::HTTP_OK,[],true);
    }
}
   