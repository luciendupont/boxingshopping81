<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GantController extends AbstractController
{
    #[Route('/gant', name: 'app_gant')]
    public function index(ArticleRepository $articleRepository , CategorieRepository $categorieRepository): Response
    {

        $gant=$articleRepository->findBy(['categorie'=>3]);

        return $this->render('gant/index.html.twig', [
            'gants'=>$gant,
        ]);
    }
}
