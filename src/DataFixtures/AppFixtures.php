<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitre('article '.$i);
            $article->setContenu('contenu '.$i);
            $article->setCreatedAt(date_create_immutable('now'));
            $article->setSlug('slug-'.$i);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
