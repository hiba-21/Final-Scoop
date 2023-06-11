<?php

namespace App\Entity;

use App\Repository\FormeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormeRepository::class)
 */
class Forme
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
    private $CommandeType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommandeType(): ?string
    {
        return $this->CommandeType;
    }

    public function setCommandeType(string $CommandeType): self
    {
        $this->CommandeType = $CommandeType;

        return $this;
    }
}
