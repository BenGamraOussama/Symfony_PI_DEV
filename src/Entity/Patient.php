<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient extends User
{
   

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dossierMedical = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gener = null;

    #[ORM\Column(nullable: true)]
    private ?int $birthday = null;

    #[ORM\Column(nullable: true)]
    private ?int $birthMonth = null;

    #[ORM\Column(nullable: true)]
    private ?int $birthYear = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(nullable: true)]
    private ?int $phone = null;




    public function getDossierMedical(): ?string
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(string $dossierMedical): static
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }

    public function getGener(): ?string
    {
        return $this->gener;
    }

    public function setGener(?string $gener): static
    {
        $this->gener = $gener;

        return $this;
    }

    public function getBirthday(): ?int
    {
        return $this->birthday;
    }

    public function setBirthday(?int $birthday): static
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getBirthMonth(): ?int
    {
        return $this->birthMonth;
    }

    public function setBirthMonth(?int $birthMonth): static
    {
        $this->birthMonth = $birthMonth;

        return $this;
    }

    public function getBirthYear(): ?int
    {
        return $this->birthYear;
    }

    public function setBirthYear(?int $birthYear): static
    {
        $this->birthYear = $birthYear;

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
}
