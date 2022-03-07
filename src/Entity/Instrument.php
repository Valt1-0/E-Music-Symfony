<?php

namespace App\Entity;

use App\Repository\InstrumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=InstrumentRepository::class)
 */
class Instrument
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     * @Assert\Length(min = 2, minMessage = "Le nom de l'Instrument doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le nom de l'Instrument doit comporter au plus 50 caractères")
     *
     * 
     */
    private $intitule;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     * @Assert\PositiveOrZero
     */
    private $prixAchat;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\Length(min = 2, minMessage = "Le marque de l'Instrument doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le marque de l'Instrument doit comporter au plus 50 caractères")
     * @Assert\NotNull
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\Length(min = 2, minMessage = "Le couleur de l'Instrument doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le couleur de l'Instrument doit comporter au plus 50 caractères")
     * @Assert\NotNull
     */
    private $couleurDominante;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\Length(min = 2, minMessage = "Le numéro de série de l'Instrument doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le numéro de série de l'Instrument doit comporter au plus 50 caractères")
     * 
     * @Assert\NotNull
     */
    private $NumeroSerie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $utilisation;

    /**
     * @ORM\ManyToOne(targetEntity=TypeInstrument::class, inversedBy="instrument")
     * @Assert\NotNull
     */
    private $typeInstrument;

    /**
     * @ORM\OneToMany(targetEntity=Pret::class, mappedBy="instrument")
     * @Assert\NotNull
     */
    private $prets;

    /**
     * @ORM\OneToMany(targetEntity=Accessoire::class, mappedBy="instrument")
     * 
     */
    private $accessoire;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="instrument")
     * @Assert\NotNull
     */
    private $interventions;

    public function __construct()
    {
        $this->prets = new ArrayCollection();
        $this->accessoire = new ArrayCollection();
        $this->interventions = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getPrixAchat(): ?int
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(int $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCouleurDominante(): ?string
    {
        return $this->couleurDominante;
    }

    public function setCouleurDominante(string $couleurDominante): self
    {
        $this->couleurDominante = $couleurDominante;

        return $this;
    }

    public function getNumeroSerie(): ?string
    {
        return $this->NumeroSerie;
    }

    public function setNumeroSerie(string $NumeroSerie): self
    {
        $this->NumeroSerie = $NumeroSerie;

        return $this;
    }

    public function getUtilisation(): ?string
    {
        return $this->utilisation;
    }

    public function setUtilisation(string $utilisation): self
    {
        $this->utilisation = $utilisation;

        return $this;
    }

    public function getTypeInstrument(): ?TypeInstrument
    {
        return $this->typeInstrument;
    }

    public function setTypeInstrument(?TypeInstrument $typeInstrument): self
    {
        $this->typeInstrument = $typeInstrument;

        return $this;
    }

    /**
     * @return Collection|Pret[]
     */
    public function getPrets(): Collection
    {
        return $this->prets;
    }

    public function addPret(Pret $pret): self
    {
        if (!$this->prets->contains($pret)) {
            $this->prets[] = $pret;
            $pret->setInstrument($this);
        }

        return $this;
    }

    public function removePret(Pret $pret): self
    {
        if ($this->prets->removeElement($pret)) {
            // set the owning side to null (unless already changed)
            if ($pret->getInstrument() === $this) {
                $pret->setInstrument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Accessoire[]
     */
    public function getAccessoire(): Collection
    {
        return $this->accessoire;
    }

    public function addAccessoire(Accessoire $accessoire): self
    {
        if (!$this->accessoire->contains($accessoire)) {
            $this->accessoire[] = $accessoire;
            $accessoire->setInstrument($this);
        }

        return $this;
    }

    public function removeAccessoire(Accessoire $accessoire): self
    {
        if ($this->accessoire->removeElement($accessoire)) {
            // set the owning side to null (unless already changed)
            if ($accessoire->getInstrument() === $this) {
                $accessoire->setInstrument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventions(): Collection
    {
        return $this->interventions;
    }

    public function addIntervention(Intervention $intervention): self
    {
        if (!$this->interventions->contains($intervention)) {
            $this->interventions[] = $intervention;
            $intervention->setInstrument($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->removeElement($intervention)) {
            // set the owning side to null (unless already changed)
            if ($intervention->getInstrument() === $this) {
                $intervention->setInstrument(null);
            }
        }

        return $this;
    }

}
