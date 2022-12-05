<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $scuare = null;

    #[ORM\Column(length: 80)]
    private ?string $pronoun = null;

    #[ORM\ManyToOne(inversedBy: 'clients')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getScuare(): ?int
    {
        return $this->scuare;
    }

    public function setScuare(int $scuare): self
    {
        $this->scuare = $scuare;

        return $this;
    }

    public function getPronoun(): ?string
    {
        return $this->pronoun;
    }

    public function setPronoun(string $pronoun): self
    {
        $this->pronoun = $pronoun;

        return $this;
    }

    public function getType(): ?Category
    {
        return $this->type;
    }

    public function setType(?Category $type): self
    {
        $this->type = $type;

        return $this;
    }
	
	
	public function __toString()
    {
        return $this->getId();
    }
}
