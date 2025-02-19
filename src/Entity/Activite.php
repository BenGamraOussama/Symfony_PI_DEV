<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    public const STATUS_NOT_STARTED = 'not_started';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_COMPLETED = 'completed';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre ne peut pas être vide")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "Le titre doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire")]
    #[Assert\Length(
        min: 10,
        max: 255,
        minMessage: "La description doit contenir au moins {{ limit }} caractères",
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(
        choices: [
            self::STATUS_NOT_STARTED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED
        ],
        message: "Statut invalide"
    )]
    private ?string $status = self::STATUS_NOT_STARTED;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type est requis")]
    // Supprimer la contrainte Assert\Choice
    private ?string $type = null;

    #[ORM\ManyToMany(targetEntity: Patient::class, inversedBy: 'activites')]
    #[Assert\Count(
        min: 1,
        minMessage: "Vous devez sélectionner au moins un patient"
    )]
    private Collection $patients;

    #[ORM\OneToOne(mappedBy: 'activite', targetEntity: Exercice::class, cascade: ['persist', 'remove'])]
    private ?Exercice $exercice = null;

    public function __construct()
    {
        $this->patients = new ArrayCollection();
        $this->status = self::STATUS_NOT_STARTED;
    }

    // Getters and Setters (inchangés)
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getPatients(): Collection
    {
        return $this->patients;
    }

    public function addPatient(Patient $patient): self
    {
        if (!$this->patients->contains($patient)) {
            $this->patients->add($patient);
        }
        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        $this->patients->removeElement($patient);
        return $this;
    }

    public function getExercice(): ?Exercice
    {
        return $this->exercice;
    }

    public function setExercice(?Exercice $exercice): self
    {
        // Méthode inchangée
        if ($exercice === null && $this->exercice !== null) {
            $this->exercice->setActivite(null);
        }

        if ($exercice !== null && $exercice->getActivite() !== $this) {
            $exercice->setActivite($this);
        }

        $this->exercice = $exercice;
        return $this;
    }
}