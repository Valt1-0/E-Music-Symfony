<?php

namespace App\Entity;

use App\Repository\TrancheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrancheRepository::class)
 */
class Tranche
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
    private $quotientMin;

    /**
     * @ORM\OneToMany(targetEntity=Couter::class, mappedBy="tranche")
     */
    private $couter;

    public function __construct()
    {
        $this->couter = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuotientMin(): ?int
    {
        return $this->quotientMin;
    }

    public function setQuotientMin(int $quotientMin): self
    {
        $this->quotientMin = $quotientMin;

        return $this;
    }

    /**
     * @return Collection|Couter[]
     */
    public function getCouter(): Collection
    {
        return $this->couter;
    }

    public function addCouter(Couter $couter): self
    {
        if (!$this->couter->contains($couter)) {
            $this->couter[] = $couter;
            $couter->setTranche($this);
        }

        return $this;
    }

    public function removeCouter(Couter $couter): self
    {
        if ($this->couter->removeElement($couter)) {
            // set the owning side to null (unless already changed)
            if ($couter->getTranche() === $this) {
                $couter->setTranche(null);
            }
        }

        return $this;
    }
}
