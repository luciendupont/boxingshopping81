<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChaussureController extends AbstractController
{
    #[Route('/chaussure', name: 'app_chaussure')]
    public function index(ArticleRepository $articleRepository , CategorieRepository $categorieRepository): Response
    {$chaussure=$articleRepository->findBy(['categorie'=>5]);
        return $this->render('chaussure/index.html.twig', [
            'chaussures'=>$chaussure,
        ]);
    }
}
