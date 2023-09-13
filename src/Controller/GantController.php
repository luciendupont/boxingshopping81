<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GantController extends AbstractController
{
    #[Route('/gant', name: 'app_gant')]
    public function index(): Response
    {
        return $this->render('gant/index.html.twig', [
            'controller_name' => 'GantController',
        ]);
    }
}
