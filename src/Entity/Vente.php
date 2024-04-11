<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'vente', indexes: [new ORM\Index(name: 'produit_id', columns: ['idproduit'])])]
class Vente
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'id', type: Types::INTEGER, nullable: false)]
    private ?int $id = null;

    #[ORM\Column(name: 'quantitevendu', type: Types::INTEGER, nullable: false)]
    private ?int $quantitevendu = null;

    #[ORM\Column(name: 'datevente', type: Types::DATE_MUTABLE, nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $datevente = 'CURRENT_TIMESTAMP';

    #[ORM\Column(name: 'montanttotal', type: Types::INTEGER, nullable: false)]
    private ?int $montanttotal = null;

    #[ORM\ManyToOne(targetEntity: Produit::class)]
    #[ORM\JoinColumn(name: 'idproduit', referencedColumnName: 'id')]
    private ?Produit $idproduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantitevendu(): ?int
    {
        return $this->quantitevendu;
    }

    public function setQuantitevendu(int $quantitevendu): static
    {
        $this->quantitevendu = $quantitevendu;

        return $this;
    }

    public function getDatevente(): ?\DateTimeInterface
    {
        return $this->datevente;
    }

    public function setDatevente(\DateTimeInterface $datevente): static
    {
        $this->datevente = $datevente;

        return $this;
    } 

    public function getMontanttotal(): ?int
    {
        return $this->montanttotal;
    }

    public function setMontanttotal(int $montanttotal): static
    {
        $this->montanttotal = $montanttotal;

        return $this;
    }

    public function getIdproduit(): ?Produit
    {
        return $this->idproduit;
    }

    public function setIdproduit(?Produit $idproduit): static
    {
        $this->idproduit = $idproduit;

        return $this;
    }
}