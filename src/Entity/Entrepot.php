<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'entrepot')]
class Entrepot
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'EntrepotID', type: 'integer', nullable: false)]
    private ?int $entrepotid = null;

    #[ORM\Column(name: 'NomE', type: 'string', length: 255, nullable: false)]
    private ?string $nome = null;

    #[ORM\Column(name: 'AdresseE', type: 'string', length: 255, nullable: false)]
    private ?string $adressee = null;

    #[ORM\Column(name: 'CapaciteE', type: 'integer', nullable: false)]
    private ?int $capacitee = null;

    #[ORM\Column(name: 'StatutE', type: 'string', length: 0, nullable: false)]
    private ?string $statute = null;

    public function getEntrepotid(): ?int
    {
        return $this->entrepotid;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getAdressee(): ?string
    {
        return $this->adressee;
    }

    public function setAdressee(string $adressee): static
    {
        $this->adressee = $adressee;

        return $this;
    }

    public function getCapacitee(): ?int
    {
        return $this->capacitee;
    }

    public function setCapacitee(int $capacitee): static
    {
        $this->capacitee = $capacitee;

        return $this;
    }

    public function getStatute(): ?string
    {
        return $this->statute;
    }

    public function setStatute(string $statute): static
    {
        $this->statute = $statute;

        return $this;
    }
}