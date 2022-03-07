<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 */
class Inscription
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPaiement;

    /**
     * @ORM\ManyToOne(targetEntity=Cours::class, inversedBy="inscription")
     */
    private $cours;

    /**
     * @ORM\ManyToOne(targetEntity=Eleve::class, inversedBy="inscription")
     */
    private $eleve;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPaiement(): ?int
    {
        return $this->nbPaiement;
    }

    public function setNbPaiement(int $nbPaiement): self
    {
        $this->nbPaiement = $nbPaiement;

        return $this;
    }

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getEleve(): ?Eleve
    {
        return $this->eleve;
    }

    public function setEleve(?Eleve $eleve): self
    {
        $this->eleve = $eleve;

        return $this;
    }
}
