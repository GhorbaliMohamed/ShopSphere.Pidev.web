<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'response', uniqueConstraints: [new ORM\UniqueConstraint(name: 'reclamation', columns: ['idRec'])])]
class Response
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'idRep', type: Types::INTEGER, nullable: false)]
    private ?int $idrep = null;

    #[ORM\Column(name: 'idRec', type: Types::INTEGER, nullable: false)]
    private ?int $idrec = null;

    #[ORM\Column(name: 'DateRep', type: Types::DATETIME_MUTABLE, nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $daterep = null;

    #[ORM\Column(name: 'ContenuRep', type: Types::STRING, length: 255, nullable: false)]
    private ?string $contenurep = null;

    public function getIdrep(): ?int
    {
        return $this->idrep;
    }

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function setIdrec(int $idrec): static
    {
        $this->idrec = $idrec;

        return $this;
    }

    public function getDaterep(): ?\DateTimeInterface
    {
        return $this->daterep;
    }

    public function setDaterep(\DateTimeInterface $daterep): static
    {
        $this->daterep = $daterep;

        return $this;
    }

    public function getContenurep(): ?string
    {
        return $this->contenurep;
    }

    public function setContenurep(string $contenurep): static
    {
        $this->contenurep = $contenurep;

        return $this;
    }
}