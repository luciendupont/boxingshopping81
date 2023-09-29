<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CasqueController extends AbstractController
{
    #[Route('/casque', name: 'app_casque')]
    public function index(ArticleRepository $articleRepository , CategorieRepository $categorieRepository): Response
    {

        $casque=$articleRepository->findBy(['categorie'=>6]);
        return $this->render('casque/index.html.twig', [
            'casques'=>$casque,
            'routes' => '/' ,
        ]);
    }
}
