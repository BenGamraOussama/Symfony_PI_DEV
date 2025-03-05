<?php

namespace App\Entity;

use App\Enum\EtatEnum;
use App\Repository\ConsultationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsultationRepository::class)]
class Consultation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $modeconsultation = null;

    #[ORM\Column(enumType: EtatEnum::class)]
    private ?EtatEnum $etaenum = null;

    /**
     * @var Collection<int, Psychiatre>
     */
    #[ORM\OneToMany(targetEntity: Psychiatre::class, mappedBy: 'consultation')]
    private Collection $psychiatre;

    /**
     * @var Collection<int, Traitement>
     */
    #[ORM\OneToMany(targetEntity: Traitement::class, mappedBy: 'consultation')]
    private Collection $traitement;

    public function __construct()
    {
        $this->psychiatre = new ArrayCollection();
        $this->traitement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getModeconsultation(): ?string
    {
        return $this->modeconsultation;
    }

    public function setModeconsultation(string $modeconsultation): static
    {
        $this->modeconsultation = $modeconsultation;

        return $this;
    }

    public function getEtaenum(): ?EtatEnum
    {
        return $this->etaenum;
    }

    public function setEtaenum(EtatEnum $etaenum): static
    {
        $this->etaenum = $etaenum;

        return $this;
    }

    /**
     * @return Collection<int, Psychiatre>
     */
    public function getPsychiatre(): Collection
    {
        return $this->psychiatre;
    }

    public function addPsychiatre(Psychiatre $psychiatre): static
    {
        if (!$this->psychiatre->contains($psychiatre)) {
            $this->psychiatre->add($psychiatre);
            $psychiatre->setConsultation($this);
        }

        return $this;
    }

    public function removePsychiatre(Psychiatre $psychiatre): static
    {
        if ($this->psychiatre->removeElement($psychiatre)) {
            // set the owning side to null (unless already changed)
            if ($psychiatre->getConsultation() === $this) {
                $psychiatre->setConsultation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Traitement>
     */
    public function getTraitement(): Collection
    {
        return $this->traitement;
    }

    public function addTraitement(Traitement $traitement): static
    {
        if (!$this->traitement->contains($traitement)) {
            $this->traitement->add($traitement);
            $traitement->setConsultation($this);
        }

        return $this;
    }

    public function removeTraitement(Traitement $traitement): static
    {
        if ($this->traitement->removeElement($traitement)) {
            // set the owning side to null (unless already changed)
            if ($traitement->getConsultation() === $this) {
                $traitement->setConsultation(null);
            }
        }

        return $this;
    }
}
