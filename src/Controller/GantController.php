<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\GantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request as BrowserKitRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GantController extends AbstractController
{
    #[Route('/gant', name: 'app_gant')]
    public function index(ArticleRepository $articleRepository , CategorieRepository $categorieRepository , Request $request): Response
    {

        $gant=$articleRepository->findBy(['categorie'=>3]);

        $recherche = $request->request->get('search');
        if($recherche != null){
            if($categorieRepository->findOneBy(['nom_categorie' => $recherche])){ 
                $categorie = $categorieRepository->findOneBy(['nom_categorie' => $recherche]);
                return $this->redirectToRoute('app_protection', ['id' => $categorie->getId()]);
            }

            if($articleRepository->findOneBy(['nom_article' => $recherche])){ 
                $article = $articleRepository->findOneBy(['nom_article' => $recherche]);
                return $this->redirectToRoute('app_equipement', ['id' => $article->getId()]);
            }
        }

        return $this->render('gant/index.html.twig', [
            'gants'=>$gant,
            'routes'=>'/gant',

        ]);
    }
}
