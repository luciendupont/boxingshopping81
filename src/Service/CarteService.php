<?php

namespace App\Service;

use App\Entity\Categorie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CarteService {

    private RequestStack $requestStack;

    private EntityManagerInterface $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em = $em;
    }

    public function addToCart(int $id): void
    {
        $carte = $this->getSession()->get('app_cartevalide', []);
        if (!empty($carte[$id])) {
            $carte[$id]++;
        } else {
            $carte[$id] = 1;
        }
        $this->getSession()->set('app_carte', $carte);
    }

    public function removeToCart(int $id)
    {
        $carte = $this->requestStack->getSession()->get('app_carte_remove', []);
        unset($carte[$id]);
        return $this->getSession()->set('app_carte', $carte);
    }

    public function decrease(int $id)
    {
        $carte = $this->getSession()->get('app_carte_decrase', []);
        if ($carte[$id] > 1) {
            $carte[$id]--;
        } else {
            unset($carte[$id]);
        }
        $this->getSession()->set('app_carte', $carte);
    }

    public function removeCartAll()
    {
        return $this->getSession()->remove('carte_remove_All');
    }

    public function getTotal(): array
    {
        $carte = $this->getSession()->get('app_carte');
        $cartData = [];
        if ($carte) {
            foreach ($carte as $id => $quantite) {
                $categorie = $this->em->getRepository(Categorie::class)->findOneBy(['id' => $id]);
                if (!$categorie) {
                    // Supprimer le produit puis continuer en sortant de la boucle
                }
                $cartData[] = [
                    'categorie' => $categorie,
                    'quantite' => $quantite
                ];
            }
        }
        return $cartData;
    }

    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
}