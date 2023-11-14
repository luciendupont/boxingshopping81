<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FourniRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FourniRepository::class)]
#[ApiResource()]
class Fourni
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'fournis')]
    private ?Article $article = null;

    #[ORM\ManyToOne(inversedBy: 'fournis')]
    private ?Fournisseur $fournniseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): static
    {
        $this->article = $article;

        return $this;
    }

    public function getFournniseur(): ?Fournisseur
    {
        return $this->fournniseur;
    }

    public function setFournniseur(?Fournisseur $fournniseur): static
    {
        $this->fournniseur = $fournniseur;

        return $this;
    }
}
