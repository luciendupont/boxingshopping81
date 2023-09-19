<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProtegedentController extends AbstractController
{
    #[Route('/protegedent', name: 'app_protegedent')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $protegedent=$articleRepository->findBy(['categorie'=>7]);
        return $this->render('protegedent/index.html.twig', [
            'protegedents'=>$protegedent,
        ]);
    }
}
