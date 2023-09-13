<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaussureController extends AbstractController
{
    #[Route('/chaussure', name: 'app_chaussure')]
    public function index(): Response
    {
        return $this->render('chaussure/index.html.twig', [
            'controller_name' => 'ChaussureController',
        ]);
    }
}
