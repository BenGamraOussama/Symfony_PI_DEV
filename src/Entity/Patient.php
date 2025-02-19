<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use App\Entity\Question;
use App\Entity\Exercice;
use App\Entity\Activite;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient extends User
{
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

    public function getGener(): ?string
    {
        return $this->gener;
    }

    public function setGener(?string $gener): static
    {
        $this->gener = $gener;

        return $this;
    }
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * @var Collection<int, RDV>
     */
    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'patient')]
    private Collection $rdvs;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->exercices = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->reponses = new ArrayCollection();
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): static
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * @return Collection<int, RDV>
     */
    public function getRdvs(): Collection
    {
        return $this->rdvs;
    }

    public function addRdv(RDV $rdv): static
    {
        if (!$this->rdvs->contains($rdv)) {
            $this->rdvs->add($rdv);
            $rdv->setPatient($this);
        }
    } 
    public function getDossierMedicalPath(): ?string
    {
        return $this->dossierMedicalPath;
    }

    public function setDossierMedicalPath(?string $dossierMedicalPath): self
    {
        $this->dossierMedicalPath = $dossierMedicalPath;

        return $this;
    }
    public function removeRdv(RDV $rdv): static
    {
        if ($this->rdvs->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getPatient() === $this) {
                $rdv->setPatient(null);
            }
        }
    }

    
    

    /**
     * @var Collection<int, Question>
     */
    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'patient')]
    private Collection $questions;



    /**
     * @var Collection<int, Exercice>
     */
    #[ORM\ManyToMany(targetEntity: Exercice::class, mappedBy: 'patient')]
    private Collection $exercices;

    /**
     * @var Collection<int, Activite>
     */
    #[ORM\ManyToMany(targetEntity: Activite::class, mappedBy: 'patient')]
    private Collection $activites;

    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'patient')]
    private Collection $reponses;

    #[ORM\OneToOne(inversedBy: 'patient', targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $user = null;

    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setPatient($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getPatient() === $this) {
                $question->setPatient(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection<int, Exercice>
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(Exercice $exercice): static
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices->add($exercice);
            $exercice->addPatient($this);
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): static
    {
        if ($this->exercices->removeElement($exercice)) {
            $exercice->removePatient($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Activite>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): static
    {
        if (!$this->activites->contains($activite)) {
            $this->activites->add($activite);
            $activite->addPatient($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): static
    {
        if ($this->activites->removeElement($activite)) {
            $activite->removePatient($this);
        }

        return $this;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }
    
}
