<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProtectionController extends AbstractController
{
    #[Route('/protection', name: 'app_protection')]
    public function index(CategorieRepository $categorieRepository): Response
    {

    $cat=$categorieRepository->findBy(['id' => 6]);
    $cat1=$categorieRepository->findBy(['id' => 7]);
    $cat2=$categorieRepository->findBy(['id' => 8]);


        return $this->render('protection/index.html.twig', [
           'cats'=>$cat,'cats1'=>$cat1,'cats2'=>$cat2,
           'routes' => '/' ,
        ]);
    }
}
