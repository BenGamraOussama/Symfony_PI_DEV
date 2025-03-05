<?php

// src/Entity/Produit.php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom du produit ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le nom du produit doit faire au moins {{ limit }} caractères.",
        maxMessage: "Le nom du produit ne peut pas dépasser {{ limit }} caractères."
    )]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]
    private string $description;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le prix ne peut pas être vide.")]
    #[Assert\Positive(message: "Le prix doit être un nombre positif.")]
    private float $prix;

    #[ORM\Column(type: "boolean")]
    private bool $disponible;

    #[ORM\ManyToOne(targetEntity: ProduitCategories::class)]
    #[ORM\JoinColumn(name: "categorie_id", referencedColumnName: "id", nullable: false)]
    private ?ProduitCategories $categorie = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    #[Assert\File(
        maxSize: "5M",
        mimeTypes: ["image/jpeg", "image/png", "image/gif"],
        mimeTypesMessage: "Veuillez télécharger une image valide (JPEG, PNG, GIF)."
    )]
    private ?string $image = null;

    #[ORM\Column(type: "integer")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "La quantité doit être supérieure ou égale à zéro.")]
    private int $quantite;

    #[ORM\OneToMany(targetEntity: Rating::class, mappedBy: "produit", cascade: ["persist", "remove"], orphanRemoval: true)]
    private Collection $ratings;

    // Nouvelle propriété pour stocker la note moyenne
    #[ORM\Column(type: "float", nullable: true)]
    private ?float $averageRating = 0; // Initialisez avec une valeur par défaut

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
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

    public function isDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): static
    {
        $this->disponible = $disponible;
        return $this;
    }

    public function getCategorie(): ?ProduitCategories
    {
        return $this->categorie;
    }

    public function setCategorie(?ProduitCategories $categorie): static
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): static
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setProduit($this);
        }
        return $this;
    }

    public function removeRating(Rating $rating): static
    {
        if ($this->ratings->removeElement($rating)) {
            if ($rating->getProduit() === $this) {
                $rating->setProduit(null);
            }
        }
        return $this;
    }

    public function getAverageRating(): ?float
    {
        return $this->averageRating;
    }

    public function setAverageRating(float $averageRating): self
    {
        $this->averageRating = $averageRating;

        return $this;
    }
}

