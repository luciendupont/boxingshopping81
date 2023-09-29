<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(CategorieRepository $categorieRepository , Request $request ,ArticleRepository $articleRepository): Response
    {
        $cat=$categorieRepository->findAll();
        $art=$articleRepository->findAll();
        $recherche = $request->request->get('search');
        if($recherche != null){
            if($categorieRepository->findOneBy(['nom_categorie' => $recherche])){ 
                $categorie = $categorieRepository->findOneBy(['nom_categorie' => $recherche]);
                return $this->redirectToRoute('app_index', ['id' => $categorie->getId()]);
            }

            if($articleRepository->findOneBy(['titre' => $recherche])){ 
                $article = $articleRepository->findOneBy(['titre' => $recherche]);
                return $this->redirectToRoute('app_artcile', ['id' => $article->getId()]);
            }
        }

        return $this->render('index/index.html.twig', [
        'cats'=>$cat,'arts'=>$art,
        'routes' => '/' ,
        ]);
    }



}