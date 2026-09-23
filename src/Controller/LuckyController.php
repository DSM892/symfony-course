<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LuckyController extends AbstractController
{
    #[Route('/chance', name: 'chance')]
    public function chance(): Response
    {
        $max = 1000;
        $number = random_int(0, $max);

        return $this->render('number.html.twig', [
            'title' => 'Chance',
            'number' => $number,
        ]);
    }
}
