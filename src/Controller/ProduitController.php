<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\Produittypeimage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Security;


use App\Form\RatingType;

final class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'produit_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        // Récupérer les produits depuis la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        return $this->render('produit/index.html.twig', [
            'user' => $user,
            'produits' => $produits,
        ]);
    }

    #[Route('/produit/add', name: 'produit_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $imageFile = $form->get('image')->getData();

if ($imageFile) {
    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
    $safeFilename = $slugger->slug($originalFilename);
    $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

    try {
        $imageFile->move(
            $this->getParameter('uploads_directory'),
            $newFilename
        );
    } catch (FileException $e) {
        throw new \Exception('Impossible de déplacer l\'image.');
    }

    $produit->setImage($newFilename);
} else {
    // Set default image if no image uploaded
    $produit->setImage('default-product.png');
}

            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index');
        }

        return $this->render('produit/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/produit/{id}/edit', name: 'produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(Produittypeimage::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // If no new image uploaded, keep the current image

            $entityManager->persist($produit);
            $entityManager->flush();

            $this->addFlash('success', 'Produit mis à jour avec succès.');

            return $this->redirectToRoute('produit_index');
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            // Log or dump form errors for debugging
            dump($form->getErrors(true, false));
        }

        return $this->render('produit/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/produit/{id}', name: 'produit_show', methods: ['GET'])]
    public function show(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé.');
        }

        $form = $this->createForm(RatingType::class);
        // Pas besoin d'appeler handleRequest ici car c'est juste pour rendre le formulaire

        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/produit/{id}/delete', name: 'produit_delete', methods: ['POST'])]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        if (!$produit) {
            throw $this->createNotFoundException('Produit non trouvé.');
        }

        // Supprimer l'image du produit
        if ($produit->getImage()) {
            $imagePath = $this->getParameter('uploads_directory') . '/' . $produit->getImage();
            if (file_exists($imagePath)) {
                unlink($imagePath); // Supprimer l'image
            }
        }

        $entityManager->remove($produit);
        $entityManager->flush();

        return $this->redirectToRoute('produit_index');
    }

    #[Route('/produit/{id}/noter', name: 'produit_noter', methods: ['POST'])]
    public function noter(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RatingType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rating = $form->getData();
            $rating->setProduit($produit);

            $entityManager->persist($rating);
            $entityManager->flush();

            // Recalculer la note moyenne
            $this->updateAverageRating($produit, $entityManager);
        }

        return $this->redirectToRoute('produit_show', ['id' => $produit->getId()]);
    }

    private function updateAverageRating(Produit $produit, EntityManagerInterface $entityManager)
    {
        $notes = $produit->getNotes(); // Suppose que tu as une relation OneToMany entre Produit et Note
        $totalNotes = count($notes);

        if ($totalNotes > 0) {
            $somme = array_reduce($notes->toArray(), fn($carry, $note) => $carry + $note->getNote(), 0);
            $produit->setAverageRating($somme / $totalNotes);
        } else {
            $produit->setAverageRating(0);
        }

        $entityManager->persist($produit);
        $entityManager->flush();
    }
}
