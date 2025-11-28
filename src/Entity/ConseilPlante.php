<?php

namespace App\Entity;

use App\Repository\ConseilPlanteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConseilPlanteRepository::class)]
class ConseilPlante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $nomPlante = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $arrosage = null;

    #[ORM\Column(length: 100)]
    private ?string $exposition = null;

    #[ORM\Column(length: 100)]
    private ?string $periode = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTime $dateAjout = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPlante(): ?string
    {
        return $this->nomPlante;
    }

    public function setNomPlante(string $nomPlante): static
    {
        $this->nomPlante = $nomPlante;

        return $this;
    }

    public function getArrosage(): ?string
    {
        return $this->arrosage;
    }

    public function setArrosage(string $arrosage): static
    {
        $this->arrosage = $arrosage;

        return $this;
    }

    public function getExposition(): ?string
    {
        return $this->exposition;
    }

    public function setExposition(string $exposition): static
    {
        $this->exposition = $exposition;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(string $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateAjout(): ?\DateTime
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTime $dateAjout): static
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }
}
