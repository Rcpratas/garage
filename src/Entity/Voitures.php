<?php

namespace App\Entity;

use App\Repository\VoituresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoituresRepository::class)]
class Voitures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $annee = null;

    #[ORM\Column(length: 255)]
    private ?string $kilometres = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column]
    private ?int $image = null;

    #[ORM\Column(length: 255)]
    private ?string $extras = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getKilometres(): ?string
    {
        return $this->kilometres;
    }

    public function setKilometres(string $kilometres): static
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(int $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getExtras(): ?string
    {
        return $this->extras;
    }

    public function setExtras(string $extras): static
    {
        $this->extras = $extras;

        return $this;
    }
}
