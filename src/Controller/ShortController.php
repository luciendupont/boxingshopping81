<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShortController extends AbstractController
{
    #[Route('/short', name: 'app_short')]
    public function index(): Response
    {
        return $this->render('short/index.html.twig', [
            'controller_name' => 'ShortController',
        ]);
    }
}
