<?php

namespace App\Entity;

use App\Repository\RDVRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use App\Entity\Psychiatre;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RDVRepository::class)]
class RDV
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

    
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $priorite = null;

    
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $patient = null;
    
    #[ORM\ManyToOne(inversedBy: 'drvs')]
    private ?Psychiatre $psychiatre = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(string $priorite): static
    {
        $this->priorite = $priorite;

        return $this;
    }
    public function __construct()
{
    $this->priorite = 'En attente'; // Initialize the priorite property
}

    public function getPatient(): ?string
    {
        return $this->patient;
    }
    
    public function setPatient(?string $patient): self
    {
        $this->patient = $patient;
    
        return $this;
    }

    public function getPsychiatre(): ?Psychiatre
    {
        return $this->psychiatre;
    }

    public function setPsychiatre(?Psychiatre $psychiatre): static
    {
        $this->psychiatre = $psychiatre;

        return $this;
    }
    
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

 }