<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(): Response
    {
        
        return $this->render('search/index.html.twig', [
      
        ]);
    }

  

     /**
     * @param Request $request
     */
     #[Route('/handleSearch', name:'handleSearch')]     
    public function handleSearch(Request $request, ArticleRepository $repo)
    {
        $query = $request->request->get('search');
        if($query) {
            $article = $repo->findArticlesByName($query);
        }
        return $this->render('search/index.html.twig', [
            'articles' => $article
        ]);
    }
}
