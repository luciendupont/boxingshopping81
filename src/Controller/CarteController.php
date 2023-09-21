<?php

namespace App\Controller;

use App\Entity\Detail;
use App\Entity\Commande;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Service\CarteService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Repository\Exception\InvalidFindByCall;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarteController extends AbstractController
{
    #[Route('/mon-panier', name: 'app_carte')]
    public function index(CarteService $cartService): Response
    {
        return $this->render('carte/index.html.twig', [
            'carte' => $cartService->getTotal()
        ]);
    }

    #[Route('/mon-panier/valide', name: 'app_carte_valide')]
    public function valide(CarteService $carteService, Request $request, CategorieRepository $categorieRepository, EntityManagerInterface $em,ArticleRepository $ArticleRepository): Response
    {
        $session = $request->getSession();
        $panier = $session->get('app_carte', []);

        $commande = new Commande();
        $total = 0;
        foreach($panier as $id => $quantite)
        {
            $article = $ArticleRepository->findOneBy(['id' => $id]);
            
            $detail = new Detail();
            $detail->setQuantite($quantite);
            $em->persist($detail);



            $total = $total + ($article->getPrixArticle() * $quantite);
        }
        $commande->setTotal($total)
            ->setEtat(0)
            ->setDateCommande(new \DateTimeImmutable())
            ->setUser($this->getUser());
        $em->persist($commande);

        $carteService->removeCartAll();

        return $this->redirectToRoute('app_stripe',["commande"=>$commande->getid()]);
    }

    #[Route('/mon-panier/add/{id<\d+>}', name: 'app_carte_add')]
    public function addToRoute(CarteService $cartService, int $id): Response
    {
        $cartService->addToCart($id);
        return $this->redirectToRoute('app_carte');
    }

    #[Route('/mon-panier/remove/{id<\d+>}', name: 'app_carte_remove')]
    public function removeToCart(CarteService $cartService, int $id): Response
    {
        $cartService->removeToCart($id);
        return $this->redirectToRoute('app_carte');
    }

    #[Route('/mon-panier/decrease/{id<\d+>}', name: 'app_carte_decrease')]

    public function decrease(CarteService $carteService, int $id): RedirectResponse
    {
        $carteService->decrease($id);
        return $this->redirectToRoute('app_carte');
    }

    #[Route('/mon-panier/removeAll', name: 'app_carte_removeAll')]
    public function removeAll(CarteService $carteService): Response
    {
        $carteService->removeCartAll();
        return $this->redirectToRoute('app_carte');
    }

}