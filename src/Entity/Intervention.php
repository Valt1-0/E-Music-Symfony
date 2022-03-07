<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionRepository::class)
 */
class Intervention
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;
    /**
     * @ORM\OneToMany(targetEntity=InterPret::class, mappedBy="intervention")
     */
    private $interPret;

    /**
     * @ORM\ManyToOne(targetEntity=Professionnel::class, inversedBy="interventions")
     */
    private $professionnel;

    /**
     * @ORM\ManyToOne(targetEntity=Instrument::class, inversedBy="interventions")
     */
    private $instrument;

    public function __construct()
    {
        $this->interPret = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }
    /**
     * @return Collection|InterPret[]
     */
    public function getInterPret(): Collection
    {
        return $this->interPret;
    }

    public function addInterPret(InterPret $interPret): self
    {
        if (!$this->interPret->contains($interPret)) {
            $this->interPret[] = $interPret;
            $interPret->setIntervention($this);
        }

        return $this;
    }

    public function removeInterPret(InterPret $interPret): self
    {
        if ($this->interPret->removeElement($interPret)) {
            // set the owning side to null (unless already changed)
            if ($interPret->getIntervention() === $this) {
                $interPret->setIntervention(null);
            }
        }

        return $this;
    }

    public function getProfessionnel(): ?Professionnel
    {
        return $this->professionnel;
    }

    public function setProfessionnel(?Professionnel $professionnel): self
    {
        $this->professionnel = $professionnel;

        return $this;
    }

    public function getInstrument(): ?Instrument
    {
        return $this->instrument;
    }

    public function setInstrument(?Instrument $instrument): self
    {
        $this->instrument = $instrument;

        return $this;
    }
}
