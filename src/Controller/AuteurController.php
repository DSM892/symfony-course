<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

final class AuteurController extends AbstractController
{
    #[Route('/auteur/{pseudo}/{langue}', name: 'auteur_langue', defaults: ['langue' => 'Non précisée'], requirements: ['langue' => 'en|fr'])]
    public function auteurLangue(string $pseudo, string $langue): Response
    {
        return $this->render('auteur/show.html.twig', [
            'title' => 'Auteur Langue',
            'pseudo' => $pseudo,
            'langue' => $langue,
        ]);
    }
}
