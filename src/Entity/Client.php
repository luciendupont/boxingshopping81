<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ApiResource()]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_client = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_client = null;

    #[ORM\Column(length: 255)]
    private ?string $code_postal_client = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_client = null;

    #[ORM\Column(length: 255)]
    private ?string $mail_client = null;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Facture::class)]
    private Collection $factures;

    public function __construct()
    {
        $this->factures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nom_client;
    }

    public function setNomClient(string $nom_client): static
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    public function getPrenomClient(): ?string
    {
        return $this->prenom_client;
    }

    public function setPrenomClient(string $prenom_client): static
    {
        $this->prenom_client = $prenom_client;

        return $this;
    }

    public function getAdresseClient(): ?string
    {
        return $this->adresse_client;
    }

    public function setAdresseClient(string $adresse_client): static
    {
        $this->adresse_client = $adresse_client;

        return $this;
    }

    public function getCodePostalClient(): ?string
    {
        return $this->code_postal_client;
    }

    public function setCodePostalClient(string $code_postal_client): static
    {
        $this->code_postal_client = $code_postal_client;

        return $this;
    }

    public function getVilleClient(): ?string
    {
        return $this->ville_client;
    }

    public function setVilleClient(string $ville_client): static
    {
        $this->ville_client = $ville_client;

        return $this;
    }

    public function getMailClient(): ?string
    {
        return $this->mail_client;
    }

    public function setMailClient(string $mail_client): static
    {
        $this->mail_client = $mail_client;

        return $this;
    }

    /**
     * @return Collection<int, Facture>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): static
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setClient($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): static
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getClient() === $this) {
                $facture->setClient(null);
            }
        }

        return $this;
    }
}
