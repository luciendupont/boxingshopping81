<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipementController extends AbstractController
{
    #[Route('/equipement', name: 'app_equipement')]
    public function index(CategorieRepository $categorieRepository): Response
    {

    $cat=$categorieRepository->findBy(['id' => 3]);
    $cat1=$categorieRepository->findBy(['id' => 4]);
    $cat2=$categorieRepository->findBy(['id' => 5]);


        return $this->render('equipement/index.html.twig', [
           'cats'=>$cat,'cats1'=>$cat1,'cats2'=>$cat2
        ]);
    }
}
