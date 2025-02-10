<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CitationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitationRepository::class)]
#[ApiResource]
class Citation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $citation = null;

    #[ORM\Column(length: 255)]
    private ?string $Auteur = null;

    #[ORM\Column]
    private ?bool $existe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCitation(): ?string
    {
        return $this->citation;
    }

    public function setCitation(string $citation): static
    {
        $this->citation = $citation;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): static
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function isExiste(): ?bool
    {
        return $this->existe;
    }

    public function setExiste(bool $existe): static
    {
        $this->existe = $existe;

        return $this;
    }
}