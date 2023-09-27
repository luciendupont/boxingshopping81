<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_article = null;

    #[ORM\Column(length: 255)]
    private ?string $description_article = null;

    #[ORM\Column(length: 255)]
    private ?string $marque_article = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    private ?string $prix_article = null;

    #[ORM\Column(length: 255)]
    private ?string $image_article = null;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Categorie::class)]
    private Collection $categories;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Fourni::class)]
    private Collection $fournis;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: Contient::class)]
    private Collection $contients;

    #[ORM\ManyToOne(inversedBy: 'article')]
    private ?Categorie $categorie = null;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->fournis = new ArrayCollection();
        $this->contients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomArticle(): ?string
    {
        return $this->nom_article;
    }

    public function setNomArticle(string $nom_article): static
    {
        $this->nom_article = $nom_article;

        return $this;
    }

    public function getDescriptionArticle(): ?string
    {
        return $this->description_article;
    }

    public function setDescriptionArticle(string $description_article): static
    {
        $this->description_article = $description_article;

        return $this;
    }

    public function getMarqueArticle(): ?string
    {
        return $this->marque_article;
    }

    public function setMarqueArticle(string $marque_article): static
    {
        $this->marque_article = $marque_article;

        return $this;
    }

    public function getPrixArticle(): ?string
    {
        return $this->prix_article;
    }

    public function setPrixArticle(string $prix_article): static
    {
        $this->prix_article = $prix_article;

        return $this;
    }

    public function getImageArticle(): ?string
    {
        return $this->image_article;
    }

    public function setImageArticle(string $image_article): static
    {
        $this->image_article = $image_article;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }



    /**
     * @return Collection<int, Fourni>
     */
    public function getFournis(): Collection
    {
        return $this->fournis;
    }

    public function addFourni(Fourni $fourni): static   
    {
        if (!$this->fournis->contains($fourni)) {
            $this->fournis->add($fourni);
            $fourni->setArticle($this);
        }

        return $this;
    }

    public function removeFourni(Fourni $fourni): static
    {
        if ($this->fournis->removeElement($fourni)) {
            // set the owning side to null (unless already changed)
            if ($fourni->getArticle() === $this) {
                $fourni->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Contient>
     */
    public function getContients(): Collection
    {
        return $this->contients;
    }

    public function addContient(Contient $contient): static
    {
        if (!$this->contients->contains($contient)) {
            $this->contients->add($contient);
            $contient->setArticle($this);
        }

        return $this;
    }

    public function removeContient(Contient $contient): static
    {
        if ($this->contients->removeElement($contient)) {
            // set the owning side to null (unless already changed)
            if ($contient->getArticle() === $this) {
                $contient->setArticle(null);
            }
        }

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

}
