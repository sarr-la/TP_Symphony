<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cleRip;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typecompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $datedebut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $datefin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numCmpte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Frouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Solde;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numAgence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Agios;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCleRip(): ?string
    {
        return $this->cleRip;
    }

    public function setCleRip(?string $cleRip): self
    {
        $this->cleRip = $cleRip;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->Etat;
    }

    public function setEtat(?int $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getTypecompte(): ?string
    {
        return $this->typecompte;
    }

    public function setTypecompte(?string $typecompte): self
    {
        $this->typecompte = $typecompte;

        return $this;
    }

    public function getDatedebut(): ?string
    {
        return $this->datedebut;
    }

    public function setDatedebut(?string $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?string
    {
        return $this->datefin;
    }

    public function setDatefin(?string $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getNumCmpte(): ?int
    {
        return $this->numCmpte;
    }

    public function setNumCmpte(?int $numCmpte): self
    {
        $this->numCmpte = $numCmpte;

        return $this;
    }

    public function getFrouverture(): ?string
    {
        return $this->Frouverture;
    }

    public function setFrouverture(?string $Frouverture): self
    {
        $this->Frouverture = $Frouverture;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->Solde;
    }

    public function setSolde(?string $Solde): self
    {
        $this->Solde = $Solde;

        return $this;
    }

    public function getNumAgence(): ?int
    {
        return $this->numAgence;
    }

    public function setNumAgence(?int $numAgence): self
    {
        $this->numAgence = $numAgence;

        return $this;
    }

    public function getAgios(): ?string
    {
        return $this->Agios;
    }

    public function setAgios(?string $Agios): self
    {
        $this->Agios = $Agios;

        return $this;
    }
}
