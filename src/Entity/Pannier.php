<?php

namespace App\Entity;

use App\Repository\PannierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=PannierRepository::class)
 */
class Pannier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $total = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $prix = [];

    /**
     * @ORM\ManyToOne(targetEntity=Produits::class, inversedBy="panniers")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $produits;

    /**
     * @ORM\ManyToOne(targetEntity=Clients::class, inversedBy="panniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="commandes")
     */
    private $commandes;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $creatAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $activer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $prepare;



    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }








    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getProduits(): ?Produits
    {
        return $this->produits;
    }

    public function setProduits(?Produits $produits): self
    {
        $this->produits = $produits;

        return $this;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setCommandes($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getCommandes() === $this) {
                $commande->setCommandes(null);
            }
        }

        return $this;
    }

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    public function setCreatAt(\DateTimeInterface $creatAt): self
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    public function getActiver(): ?bool
    {
        return $this->activer;
    }

    public function setActiver(bool $activer): self
    {
        $this->activer = $activer;

        return $this;
    }

    public function getPrepare(): ?bool
    {
        return $this->prepare;
    }

    public function setPrepare(bool $prepare): self
    {
        $this->prepare = $prepare;

        return $this;
    }
}
