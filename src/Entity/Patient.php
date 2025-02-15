<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient extends User
{
   

    #[ORM\Column(length: 255)]
    private ?string $dossierMedical = null;




    public function getDossierMedical(): ?string
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(string $dossierMedical): static
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }
}
