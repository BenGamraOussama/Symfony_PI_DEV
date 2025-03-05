<?php
// src/Service/PanierService.php
namespace App\Service;

use App\Entity\Panier;
use App\Repository\PanierRepository;
use Symfony\Component\Security\Core\Security;

class PanierService
{
    private $panierRepository;
    private $security;

    public function __construct(PanierRepository $panierRepository, Security $security)
    {
        $this->panierRepository = $panierRepository;
        $this->security = $security;
    }

    public function getPanierUtilisateur()
    {
        $utilisateur = $this->security->getUser();
        if (!$utilisateur) {
            return [];
        }

        return $this->panierRepository->findBy(['utilisateur' => $utilisateur]);
    }
}