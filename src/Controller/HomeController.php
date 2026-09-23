<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    #[Route('/a-propos', name: 'app_a-propos')]
    public function aPropos(): Response
    {
        return $this->render('home/a-propos.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/api/ping', name: 'app_api/ping')]
    public function apiPing()
        {
            $data = ['message' => 'Hello, World!'];
            return new JsonResponse($data);
        }
}
