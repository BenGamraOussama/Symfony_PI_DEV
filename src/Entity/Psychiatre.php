<?php

namespace App\Entity;

use App\Repository\PsychiatreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PsychiatreRepository::class)]
class Psychiatre extends User
{
  
    #[ORM\Column(length: 255)]
    private ?string $specialite = null;

    #[ORM\ManyToOne(inversedBy: 'psychiatre')]
    private ?Consultation $consultation = null;

    /**
     * @var Collection<int, RDV>
     */
    #[ORM\OneToMany(targetEntity: RDV::class, mappedBy: 'psychiatre')]
    private Collection $drvs;

    public function __construct()
    {
        $this->drvs = new ArrayCollection();
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getConsultation(): ?Consultation
    {
        return $this->consultation;
    }

    public function setConsultation(?Consultation $consultation): static
    {
        $this->consultation = $consultation;

        return $this;
    }

    /**
     * @return Collection<int, RDV>
     */
    public function getDrvs(): Collection
    {
        return $this->drvs;
    }

    public function addDrv(RDV $drv): static
    {
        if (!$this->drvs->contains($drv)) {
            $this->drvs->add($drv);
            $drv->setPsychiatre($this);
        }

        return $this;
    }

    public function removeDrv(RDV $drv): static
    {
        if ($this->drvs->removeElement($drv)) {
            // set the owning side to null (unless already changed)
            if ($drv->getPsychiatre() === $this) {
                $drv->setPsychiatre(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
