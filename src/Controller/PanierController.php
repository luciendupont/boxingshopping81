<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Contient;
use App\Service\PanierService;
use App\Service\MailService;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route('/mon-panier', name: 'app_panier')]
    public function index(PanierService $panierService): Response
    {
        return $this->render('panier/index.html.twig', [
            'panier' => $panierService->getTotal()
        ]);
    }

    #[Route('/mon-panier/valide', name: 'app_panier_valide')]
    public function valide(Request $request, ArticleRepository $articleRepository, EntityManagerInterface $em): Response
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        $commande = new Commande();
        $total = 0;
        foreach($panier as $id => $quantite)
        {
            $article = $articleRepository->find($id);
            
            $Contient = new Contient();
            $Contient->setArticle($article)
                ->setQuantité($quantite);
            $em->persist($Contient);

            
            $article->addContient($Contient);
            $commande->addContient($Contient);
            $total = $total + ($article->getPrixArticle() * $quantite);
        }
        
        $commande->setTotal($total)
            ->setEtat(0)
            ->setDateCommande(new \DateTimeImmutable())
            ->setNomCommande($this->getUser()->getNom())
            ->setDescriptionCommande($article->getNomArticle())
            ->setUser($this->getUser());
        $em->persist($commande);

        $em->flush();

        return $this->redirectToRoute('app_index');
    }

    #[Route('/mon-panier/add/{id<\d+>}', name: 'app_panier_add')]
    public function addToRoute(PanierService $panierService, int $id): Response
    {
        $panierService->ajouterAuPanier($id);
        return $this->redirectToRoute('app_panier');
    }

    #[Route('/mon-panier/remove/{id<\d+>}', name: 'app_panier_remove')]
    public function removeToCart(PanierService $panierService, int $id): Response
    {
        $panierService->retireDuPanier($id);
        return $this->redirectToRoute('app_panier');
    }

    #[Route('/mon-panier/decrease/{id<\d+>}', name: 'app_panier_decrease')]
    public function decrease(PanierService $panierService, int $id): RedirectResponse
    {
        $panierService->reduire($id);
        return $this->redirectToRoute('app_panier');
    }

    #[Route('/mon-panier/removeAll', name: 'app_cart_removeAll')]
    public function removeAll(PanierService $panierService): Response
    {
        $panierService->supprimerToutPanier();
        return $this->redirectToRoute('app_panier');
    }
}