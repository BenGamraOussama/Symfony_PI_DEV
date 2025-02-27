<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient extends User
{
    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $blocked = false;

    public function isBlocked(): bool
    {
        return $this->blocked;
    }

    public function setBlocked(bool $blocked): self
    {
        $this->blocked = $blocked;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $dossierMedicalPath = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gener = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(nullable: true)]
    private ?int $phone = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'patient')]
    private Collection $rdvs;

    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'patient')]
    private Collection $questions;

    #[ORM\ManyToMany(targetEntity: Exercice::class, inversedBy: 'patients')]
    private Collection $exercices;

    #[ORM\ManyToMany(targetEntity: Activite::class, inversedBy: 'patients')]
    private Collection $activites;

    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'patient')]
    private Collection $reponses;

    #[ORM\OneToOne(inversedBy: 'patient', targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $user = null;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->exercices = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->reponses = new ArrayCollection();
    }

    // Other existing methods...
}
