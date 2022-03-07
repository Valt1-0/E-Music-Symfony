<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Assert\Length(min = 2, minMessage = "Le nom du Cours doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le nom du Cours doit comporter au plus 50 caractères")
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $ageMini;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $ageMaxi;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $nbPlaceMaxi;

    /**
     * @ORM\OneToMany(targetEntity=Couter::class, mappedBy="cours")
     */
    private $couter;

    /**
     * @ORM\ManyToOne(targetEntity=Jour::class, inversedBy="cours")
     */
    private $jour;

    /**
     * @ORM\OneToMany(targetEntity=Inscription::class, mappedBy="cours")
     */
    private $inscription;

    /**
     * @ORM\ManyToOne(targetEntity=Professeur::class, inversedBy="cours")
     */
    private $professeur;

    /**
     * @ORM\ManyToOne(targetEntity=TypeInstrument::class, inversedBy="cours")
     */
    private $typeInstrument;

    public function __construct()
    {
        $this->couter = new ArrayCollection();
        $this->inscription = new ArrayCollection();
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

    public function getAgeMini(): ?int
    {
        return $this->ageMini;
    }

    public function setAgeMini(int $ageMini): self
    {
        $this->ageMini = $ageMini;

        return $this;
    }

    public function getAgeMaxi(): ?int
    {
        return $this->ageMaxi;
    }

    public function setAgeMaxi(int $ageMaxi): self
    {
        $this->ageMaxi = $ageMaxi;

        return $this;
    }

    public function getNbPlaceMaxi(): ?int
    {
        return $this->nbPlaceMaxi;
    }

    public function setNbPlaceMaxi(int $nbPlaceMaxi): self
    {
        $this->nbPlaceMaxi = $nbPlaceMaxi;

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
            $couter->setCours($this);
        }

        return $this;
    }

    public function removeCouter(Couter $couter): self
    {
        if ($this->couter->removeElement($couter)) {
            // set the owning side to null (unless already changed)
            if ($couter->getCours() === $this) {
                $couter->setCours(null);
            }
        }

        return $this;
    }

    public function getJour(): ?Jour
    {
        return $this->jour;
    }

    public function setJour(?Jour $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * @return Collection|Inscription[]
     */
    public function getInscription(): Collection
    {
        return $this->inscription;
    }

    public function addInscription(Inscription $inscription): self
    {
        if (!$this->inscription->contains($inscription)) {
            $this->inscription[] = $inscription;
            $inscription->setCours($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscription->removeElement($inscription)) {
            // set the owning side to null (unless already changed)
            if ($inscription->getCours() === $this) {
                $inscription->setCours(null);
            }
        }

        return $this;
    }

    public function getProfesseur(): ?Professeur
    {
        return $this->professeur;
    }

    public function setProfesseur(?Professeur $professeur): self
    {
        $this->professeur = $professeur;

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

}
