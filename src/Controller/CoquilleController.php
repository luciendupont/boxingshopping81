<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoquilleController extends AbstractController
{
    #[Route('/coquille', name: 'app_coquille')]
    public function index(ArticleRepository $articleRepository): Response
    {$coquille=$articleRepository->findBy(['categorie'=>8]);
        return $this->render('coquille/index.html.twig', [
           'coquilles'=>$coquille ,
           'routes' => '/' ,
        ]);
    }
}

