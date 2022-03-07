<?php

namespace App\Entity;

use App\Repository\InterPretRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterPretRepository::class)
 */
class InterPret
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
    private $quotite;

    /**
     * @ORM\ManyToOne(targetEntity=Pret::class, inversedBy="interPret")
     */
    private $pret;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="interPret")
     */
    private $intervention;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuotite(): ?int
    {
        return $this->quotite;
    }

    public function setQuotite(int $quotite): self
    {
        $this->quotite = $quotite;

        return $this;
    }

    public function getPret(): ?Pret
    {
        return $this->pret;
    }

    public function setPret(?Pret $pret): self
    {
        $this->pret = $pret;

        return $this;
    }

    public function getIntervention(): ?Intervention
    {
        return $this->intervention;
    }

    public function setIntervention(?Intervention $intervention): self
    {
        $this->intervention = $intervention;

        return $this;
    }
}
