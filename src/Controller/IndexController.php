<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(CategorieRepository $categorieRepository , Request $request ,ArticleRepository $articleRepository): Response
    {
        $cat=$categorieRepository->findAll();


        return $this->render('index/index.html.twig', [
        'cats'=>$cat,
        ]);
    }



}