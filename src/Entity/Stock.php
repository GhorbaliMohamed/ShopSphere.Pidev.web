<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'stock')]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'StockID', type: Types::INTEGER, nullable: false)]
    private ?int $stockid = null;

    #[ORM\Column(name: 'PrixUnitaireS', type: Types::FLOAT, precision: 10, scale: 0, nullable: false)]
    private ?float $prixunitaires = null;

    #[ORM\Column(name: 'CodeProduitS', type: Types::INTEGER, nullable: false)]
    private ?int $codeproduits = null;

    #[ORM\Column(name: 'QuantiteS', type: Types::INTEGER, nullable: false)]
    private ?int $quantites = null;

    #[ORM\Column(name: 'dateRestockS', type: Types::DATE_MUTABLE, nullable: false)]
    private ?\DateTimeInterface $daterestocks = null;

    public function getStockid(): ?int
    {
        return $this->stockid;
    }

    public function getPrixunitaires(): ?float
    {
        return $this->prixunitaires;
    }

    public function setPrixunitaires(float $prixunitaires): static
    {
        $this->prixunitaires = $prixunitaires;

        return $this;
    }

    public function getCodeproduits(): ?int
    {
        return $this->codeproduits;
    }

    public function setCodeproduits(int $codeproduits): static
    {
        $this->codeproduits = $codeproduits;

        return $this;
    }

    public function getQuantites(): ?int
    {
        return $this->quantites;
    }

    public function setQuantites(int $quantites): static
    {
        $this->quantites = $quantites;

        return $this;
    }

    public function getDaterestocks(): ?\DateTimeInterface
    {
        return $this->daterestocks;
    }

    public function setDaterestocks(\DateTimeInterface $daterestocks): static
    {
        $this->daterestocks = $daterestocks;

        return $this;
    }
}