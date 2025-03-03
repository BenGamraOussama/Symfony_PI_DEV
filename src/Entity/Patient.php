<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\RDV;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient extends User
{
   

    #[ORM\Column(length: 255)]
    private ?string $dossierMedical = null;

    /**
     * @var Collection<int, RDV>
     */
    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'patient')]
    private Collection $rdv;

    public function __construct()
    {
        $this->rdv = new ArrayCollection();
    }



    public function getDossierMedical(): ?string
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(string $dossierMedical): static
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }

    /**
     * @return Collection<int, RDV>
     */
    public function getRdv(): Collection
    {
        return $this->rdv;
    }

    public function addRdv(RDV $rdv): static
    {
        if (!$this->rdv->contains($rdv)) {
            $this->rdv->add($rdv);
            $rdv->setPatient($this);
        }

        return $this;
    }

    public function removeRdv(RDV $rdv): static
    {
        if ($this->rdv->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getPatient() === $this) {
                $rdv->setPatient(null);
            }
        }

        return $this;
    }




}
