<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $cat=$categorieRepository->findAll();


        return $this->render('index/index.html.twig', [
        'cats'=>$cat,
        ]);
    }
}