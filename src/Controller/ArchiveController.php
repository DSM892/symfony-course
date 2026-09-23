<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/archives', name: 'archives_')]

final class ArchiveController extends AbstractController
{
    #[Route('/{annee}', name: 'annee', requirements: ['annee' => '\d{4}$'])]
    public function archiveAnnee(int $annee): Response
    {
        $date = new \DateTimeImmutable("$annee-01-01");

        return $this->render('archives/annee.html.twig', [
            'title' => 'Archive Annee',
            'archive_date' => $date,
        ]);
    }

    #[Route('/apercu/{uuid}', name: 'apercu_uuid', requirements: ['uuid' => Requirement::UUID_V4])]
    public function archiveApercuUUID(string $uuid): Response
    {
        return $this->render('archives/apercu/brouillon.html.twig', [
            'title' => 'Archive Apercu UUID',
        ]);
    }
}
