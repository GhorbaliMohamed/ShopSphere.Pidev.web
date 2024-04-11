<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'idRec', type: Types::INTEGER, nullable: false)]
    private ?int $idrec = null;

    #[ORM\Column(name: 'name', type: Types::STRING, length: 255, nullable: false)]
    private ?string $name = null;

    #[ORM\Column(name: 'lastName', type: Types::STRING, length: 255, nullable: false)]
    private ?string $lastname = null;

    #[ORM\Column(name: 'descriRec', type: Types::STRING, length: 255, nullable: false)]
    private ?string $descrirec = null;

    #[ORM\Column(name: 'DateRec', type: Types::DATETIME_MUTABLE, nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $daterec = null;

    #[ORM\Column(name: 'CategorieRec', type: Types::STRING, length: 255, nullable: false)]
    private ?string $categorierec = null;

    #[ORM\Column(name: 'StatutRec', type: Types::STRING, length: 30, nullable: false)]
    private ?string $statutrec = null;

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDescrirec(): ?string
    {
        return $this->descrirec;
    }

    public function setDescrirec(string $descrirec): static
    {
        $this->descrirec = $descrirec;

        return $this;
    }

    public function getDaterec(): ?\DateTimeInterface
    {
        return $this->daterec;
    }

    public function setDaterec(\DateTimeInterface $daterec): static
    {
        $this->daterec = $daterec;

        return $this;
    }

    public function getCategorierec(): ?string
    {
        return $this->categorierec;
    }

    public function setCategorierec(string $categorierec): static
    {
        $this->categorierec = $categorierec;

        return $this;
    }

    public function getStatutrec(): ?string
    {
        return $this->statutrec;
    }

    public function setStatutrec(string $statutrec): static
    {
        $this->statutrec = $statutrec;

        return $this;
    }
}