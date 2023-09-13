<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoquilleController extends AbstractController
{
    #[Route('/coquille', name: 'app_coquille')]
    public function index(): Response
    {
        return $this->render('coquille/index.html.twig', [
            'controller_name' => 'CoquilleController',
        ]);
    }
}
