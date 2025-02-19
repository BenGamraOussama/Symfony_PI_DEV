<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
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
    private $nom;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]
    private $description;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le prix ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^\d+(\.\d{1,2})?$/",
        message: "Le prix doit être un nombre valide avec maximum deux décimales."
    )]
    private $prix;

    #[ORM\Column(type: "boolean")]
    private $disponible;

    // Relation ManyToOne avec ProduitCategories
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

    // Getters et Setters

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

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
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
}
