<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
#[ApiResource()]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_fournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_fournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $code_postal_fournniseur = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_fournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_fournnisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone_fournniseur = null;

    #[ORM\OneToMany(mappedBy: 'fournniseur', targetEntity: Fourni::class)]
    private Collection $fournis;

    public function __construct()
    {
        $this->fournis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nom_fournisseur;
    }

    public function setNomFournisseur(string $nom_fournisseur): static
    {
        $this->nom_fournisseur = $nom_fournisseur;

        return $this;
    }

    public function getAdresseFournisseur(): ?string
    {
        return $this->adresse_fournisseur;
    }

    public function setAdresseFournisseur(string $adresse_fournisseur): static
    {
        $this->adresse_fournisseur = $adresse_fournisseur;

        return $this;
    }

    public function getCodePostalFournniseur(): ?string
    {
        return $this->code_postal_fournniseur;
    }

    public function setCodePostalFournniseur(string $code_postal_fournniseur): static
    {
        $this->code_postal_fournniseur = $code_postal_fournniseur;

        return $this;
    }

    public function getContactFournisseur(): ?string
    {
        return $this->contact_fournisseur;
    }

    public function setContactFournisseur(string $contact_fournisseur): static
    {
        $this->contact_fournisseur = $contact_fournisseur;

        return $this;
    }

    public function getVilleFournnisseur(): ?string
    {
        return $this->ville_fournnisseur;
    }

    public function setVilleFournnisseur(string $ville_fournnisseur): static
    {
        $this->ville_fournnisseur = $ville_fournnisseur;

        return $this;
    }

    public function getTelephoneFournniseur(): ?string
    {
        return $this->telephone_fournniseur;
    }

    public function setTelephoneFournniseur(string $telephone_fournniseur): static
    {
        $this->telephone_fournniseur = $telephone_fournniseur;

        return $this;
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
            $fourni->setFournniseur($this);
        }

        return $this;
    }

    public function removeFourni(Fourni $fourni): static
    {
        if ($this->fournis->removeElement($fourni)) {
            // set the owning side to null (unless already changed)
            if ($fourni->getFournniseur() === $this) {
                $fourni->setFournniseur(null);
            }
        }

        return $this;
    }
}
