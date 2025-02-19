<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(targetEntity: Activite::class, inversedBy: 'exercice')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Activite $activite = null;

    #[ORM\ManyToMany(targetEntity: Patient::class, mappedBy: 'exercices')]
    private Collection $patients;

    #[ORM\Column(type: 'text')]
    private string $question;

    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'exercice', orphanRemoval: true)]
    private Collection $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
        $this->patients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivite(): ?Activite
    {
        return $this->activite;
    }

    public function setActivite(Activite $activite): self
    {
        $this->activite = $activite;
        return $this;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setExercice($this);
        }
        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            if ($reponse->getExercice() === $this) {
                $reponse->setExercice(null);
            }
        }
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
            $patient->addExercice($this);
        }
        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        if ($this->patients->removeElement($patient)) {
            $patient->removeExercice($this);
        }
        return $this;
    }
}
