<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CasqueController extends AbstractController
{
    #[Route('/casque', name: 'app_casque')]
    public function index(): Response
    {
        return $this->render('casque/index.html.twig', [
            'controller_name' => 'CasqueController',
        ]);
    }
}
