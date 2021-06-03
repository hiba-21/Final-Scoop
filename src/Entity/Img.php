<?php

namespace App\Entity;

use App\Repository\ImgRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImgRepository::class)
 */
class Img
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
     * @ORM\ManyToOne(targetEntity=Supplements::class, inversedBy="imgs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Supplements;

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

    public function getSupplements(): ?Supplements
    {
        return $this->Supplements;
    }

    public function setSupplements(?Supplements $Supplements): self
    {
        $this->Supplements = $Supplements;

        return $this;
    }
}
