<?php

namespace App\Entity;

use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotoRepository::class)
 */
class Photo
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
     * @ORM\ManyToOne(targetEntity=InfoBoutique::class, inversedBy="photos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reglages;

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

    public function getReglages(): ?InfoBoutique
    {
        return $this->reglages;
    }

    public function setReglages(?InfoBoutique $reglages): self
    {
        $this->reglages = $reglages;

        return $this;
    }
}
