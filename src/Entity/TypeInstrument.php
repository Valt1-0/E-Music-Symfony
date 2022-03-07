<?php

namespace App\Entity;

use App\Repository\TypeInstrumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeInstrumentRepository::class)
 */
class TypeInstrument
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
     * @ORM\OneToMany(targetEntity=Cours::class, mappedBy="typeInstrument")
     */
    private $cours;

    /**
     * @ORM\ManyToOne(targetEntity=ClasseInstrument::class, inversedBy="typeInstruments")
     */
    private $classeInstrument;

    /**
     * @ORM\OneToMany(targetEntity=Instrument::class, mappedBy="typeInstrument")
     */
    private $instrument;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
        $this->instrument = new ArrayCollection();
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

    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->setTypeInstrument($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getTypeInstrument() === $this) {
                $cour->setTypeInstrument(null);
            }
        }

        return $this;
    }

    public function getClasseInstrument(): ?ClasseInstrument
    {
        return $this->classeInstrument;
    }

    public function setClasseInstrument(?ClasseInstrument $classeInstrument): self
    {
        $this->classeInstrument = $classeInstrument;

        return $this;
    }

    /**
     * @return Collection|Instrument[]
     */
    public function getInstrument(): Collection
    {
        return $this->instrument;
    }

    public function addInstrument(Instrument $instrument): self
    {
        if (!$this->instrument->contains($instrument)) {
            $this->instrument[] = $instrument;
            $instrument->setTypeInstrument($this);
        }

        return $this;
    }

    public function removeInstrument(Instrument $instrument): self
    {
        if ($this->instrument->removeElement($instrument)) {
            // set the owning side to null (unless already changed)
            if ($instrument->getTypeInstrument() === $this) {
                $instrument->setTypeInstrument(null);
            }
        }

        return $this;
    }
}
