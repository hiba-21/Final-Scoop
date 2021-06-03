<?php

namespace App\Entity;

use App\Repository\SupplementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=SupplementsRepository::class)
 */
class Supplements
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;


    /**
     * @ORM\OneToMany(targetEntity=Img::class, mappedBy="Supplements", orphanRemoval=true,cascade={"persist"})
     */
    private $imgs;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="supplements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

    public function __construct()
    {
        $this->imgs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
    /**
     * @return Collection|Img[]
     */
    public function getImgs(): Collection
    {
        return $this->imgs;
    }

    public function addImg(Img $img): self
    {
        if (!$this->imgs->contains($img)) {
            $this->imgs[] = $img;
            $img->setSupplements($this);
        }

        return $this;
    }

    public function removeImg(Img $img): self
    {
        if ($this->imgs->removeElement($img)) {
            // set the owning side to null (unless already changed)
            if ($img->getSupplements() === $this) {
                $img->setSupplements(null);
            }
        }

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }
}
