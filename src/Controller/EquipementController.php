<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipementController extends AbstractController
{
    #[Route('/equipement', name: 'app_equipement')]
    public function index( ArticleRepository $articleRepository): Response
    {
    $art=$articleRepository->findAll();


        return $this->render('equipement/index.html.twig', [
           'arts'=>$art
        ]);
    }
}
