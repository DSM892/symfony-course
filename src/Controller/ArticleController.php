<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Requirement\Requirement;

#[Route('/article', name: 'article_')]

final class ArticleController extends AbstractController
{
    #[Route('/{id}', name: 'id', requirements: ['id' => Requirement::DIGITS])]
    public function articleId(int $id): Response
    {
        return $this->render('article/show.html.twig', [
            'title' => 'Article ID',
            'article_id' => $id,
        ]);
    }

    #[Route('/slug/{slug}', name: 'slug_slug', requirements: ['slug' => '[a-z0-9]+'])]
    public function articleSlugSlug(string $slug): Response
    {
        return $this->render('article/slug/slug.html.twig', [
            'title' => 'Article Slug',
            'article_slug' => $slug,
        ]);
    }

    #[Route('/nouveau', name: 'nouveau')]
    public function articleNouveau(): Response
    {
        return $this->render('article/nouveau.html.twig', [
            'title' => 'Article Nouveau',
            'article_nouveau' => 'Nouvel article',
        ]);
    }

    #[Route('/{tri}', name: 'tri', requirements: ['tri' => 'recents|anciens|commentes'])]
    public function articleTri(string $tri): Response
    {
        return $this->render('article/tri.html.twig', [
            'title' => 'Article Tri',
            'type_tri' => $tri,
        ]);
    }

    #[Route('/{slug}', name: 'slug', requirements: ['slug' => '[a-z0-9]+'])]
    public function articleSlug(string $slug): Response
    {
        return $this->render('article/slug.html.twig', [
            'title' => 'Article Slug',
            'article_slug' => $slug,
        ]);
    }

    #[Route('/{slug}/partage', name: 'slug_partage', requirements: ['slug' => '[a-z0-9]+'])]
    public function articleSlugPartage(string $slug): Response
    {
        return $this->render('article/slug/slug-partage.html.twig', [
            'title' => 'Article Slug Partage',
            'article_slug' => $slug,
            'source' => "sourcePartage",
        ]);
    }
}
