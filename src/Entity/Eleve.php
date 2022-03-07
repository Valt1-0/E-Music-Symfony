<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 */
class Eleve
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
     * @Assert\Length(min = 2, minMessage = "Le nom de l'Elève doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le nom de l'Elève doit comporter au plus 50 caractères")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min = 2, minMessage = "Le prenom de l'Elève doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "Le prenom de l'Elève doit comporter au plus 50 caractères")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotNull
     */
    private $dateNaiss;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min = 2, minMessage = "La rue doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "La rue doit comporter au plus 50 caractères")
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=255)
     *      * @Assert\Length(min = 2, minMessage = "La rue doit comporter au moins 2 caractères")
     * @Assert\Length(max = 50, maxMessage = "La rue doit comporter au plus 50 caractères")
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(max = 100, maxMessage = "La ville doit comporter au plus 100 caractères")
     */
    private $codePostal;
    /**
     * @ORM\OneToMany(targetEntity=Inscription::class, mappedBy="eleve")
     * @Assert\NotNull
     */
    private $inscription;
    /**
     * @ORM\ManyToOne(targetEntity=Responsable::class, inversedBy="eleves")
     */
    private $responsable;

    /**
     * @ORM\OneToMany(targetEntity=Pret::class, mappedBy="eleve")
     */
    private $prets;

    public function __construct()
    {
        $this->inscription = new ArrayCollection();
        $this->prets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(\DateTimeInterface $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

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
            $inscription->setEleve($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscription->removeElement($inscription)) {
            // set the owning side to null (unless already changed)
            if ($inscription->getEleve() === $this) {
                $inscription->setEleve(null);
            }
        }

        return $this;
    }
    public function getResponsable(): ?Responsable
    {
        return $this->responsable;
    }

    public function setResponsable(?Responsable $responsable): self
    {
        $this->responsable = $responsable;

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
            $pret->setEleve($this);
        }

        return $this;
    }

    public function removePret(Pret $pret): self
    {
        if ($this->prets->removeElement($pret)) {
            // set the owning side to null (unless already changed)
            if ($pret->getEleve() === $this) {
                $pret->setEleve(null);
            }
        }

        return $this;
    }
}
