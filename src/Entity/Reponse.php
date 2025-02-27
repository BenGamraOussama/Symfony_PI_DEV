<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Exercice::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "L'exercice associé est obligatoire")]
    private ?Exercice $exercice = null;

    #[ORM\ManyToOne(targetEntity: Patient::class, inversedBy: 'reponses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le patient associé est obligatoire")]
    private ?Patient $patient = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "La réponse ne peut pas être vide")]
    #[Assert\Length(
        min: 5,
        max: 2000,
        minMessage: "La réponse doit contenir au moins {{ limit }} caractères",
        maxMessage: "La réponse ne peut pas dépasser {{ limit }} caractères"
    )]
    private string $contenu;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $dateCreation;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    // Getters/Setters (inchangés)
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExercice(): ?Exercice
    {
        return $this->exercice;
    }

    public function setExercice(?Exercice $exercice): self
    {
        $this->exercice = $exercice;
        return $this;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getDateCreation(): \DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;
        return $this;
    }
}
