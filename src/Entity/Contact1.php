<?php

namespace App\Entity;

use App\Repository\Contact1Repository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=Contact1Repository::class)
 */
class Contact1
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     * pattern="/[0-9]{10}"
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=10)
     */
    private $message;

    /**
     * @ORM\Column(type="json")
     */
    private $Problem = [];



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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getProblem(): ?array
    {
        return $this->Problem;
    }

    public function setProblem(array $Problem): self
    {
        $this->Problem = $Problem;

        return $this;
    }
}
