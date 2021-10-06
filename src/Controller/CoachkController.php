<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachkController extends AbstractController
{
    /**
     * @Route("/coachk", name="coachk")
     */
    public function coachk(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find(1);

        dump($article);

        return $this->render('coachk/index.html.twig', [
            'controller_name' => 'Votre Coach',
            'article' => $article
        ]);
    }
}
