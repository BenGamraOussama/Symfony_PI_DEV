<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $naissance = null;

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

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getNaissance(): ?\DateTimeInterface
    {
        return $this->naissance;
    }

    public function setNaissance(?\DateTimeInterface $naissance): static
    {
        $this->naissance = $naissance;

        return $this;
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
}
