<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Requirement\Requirement;

final class ArticleController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_id', requirements: ['id' => Requirement::DIGITS])]
    public function articleId(int $id): Response
    {
        return $this->render('article/show.html.twig', [
            'title' => 'Article ID',
            'article_id' => $id,
        ]);
    }

    #[Route('/article/slug/{slug}', name: 'article_slug', requirements: ['slug' => '[a-z0-9]+'])]
    public function articleSlug(string $slug): Response
    {
        return $this->render('article/slug.html.twig', [
            'title' => 'Article Slug',
            'article_slug' => $slug,
        ]);
    }
}
