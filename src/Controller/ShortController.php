<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShortController extends AbstractController
{
    #[Route('/short', name: 'app_short')]
    public function index(ArticleRepository $articleRepository,CategorieRepository $categorieRepository): Response
    {
        $short=$articleRepository->findBy(['categorie'=>4]);
        return $this->render('short/index.html.twig', [
            'shorts'=>$short,
            'routes' => '/' ,
        ]);
    }
}
