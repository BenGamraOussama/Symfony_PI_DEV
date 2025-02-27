<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Form\Commande1Type;
use App\Form\LigneCommandeType;
use App\Repository\CommandeRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/commande')]
final class CommandeController extends AbstractController{



     #[Route('/admin', name: 'app_commande_index_admin')]
    public function andexadmin(CommandeRepository $commandeRepository,Request $request ,PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $commandeRepository->findAll(),
            $request->query->getInt('page', 1),
            2
            
        );
        return $this->render('commande/index_admin.html.twig', [
            'commandes' => $pagination
        ]);
    }

    #[Route(name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {

        $user = $this->getUser();
       $commands = $commandeRepository->findByUser($user);
        return $this->render('commande/index.html.twig', [
            'commandes' =>$commands  ,
        ]);
    }
    
    


    #[Route('/{id}/ajout/ligne/commande', name: 'app_commande_add_ligne_de_commande')]
    public function ajout2(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
       
    
        $ligneCommande = new LigneCommande();
        $form = $this->createForm(LigneCommandeType::class, $ligneCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        $ligneCommande->setCommande($commande);
        $montantTotal = 0;
            
            foreach ($commande->getLignes() as $ligne) {
                $montantTotal += $ligne->getQuantite() * $ligne->getPrixUnitaire();
                $ligne->setCommande($commande);  
                $entityManager->persist($ligne);

            }
            $montantTotal += $ligneCommande->getQuantite() * $ligneCommande->getPrixUnitaire()  ;
            $commande->setMontantTotal($montantTotal);
            $entityManager->persist($ligneCommande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_show', ["id"=>$commande->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'ligne_commande' => $ligneCommande,
            'form' => $form,
        ]);
    }
    

    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
            $commande->setDateCommande(new DateTime());
            $commande->setMontantTotal(0);
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
       
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }
    #[Route('/{id}/admin', name: 'app_commande_show_admin', methods: ['GET'])]
    public function adminshow(Commande $commande): Response
    {
        return $this->render('commande/show_admin.html.twig', [
            'commande' => $commande,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_commande_edit')]
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Commande1Type::class, $commande);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($commande->getLignes() as $ligne) {
                $entityManager->remove($ligne);
            }
            $entityManager->flush();
    
            $montantTotal = 0;
            foreach ($commande->getLignes() as $ligne) {
                $montantTotal += $ligne->getQuantite() * $ligne->getPrixUnitaire();
                $ligne->setCommande($commande);
                $entityManager->persist($ligne);
            }
    
            $commande->setMontantTotal($montantTotal);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

if ($this->isGranted("ROLE_ADMIN")) {
    return $this->redirectToRoute('app_commande_index_admin', [], Response::HTTP_SEE_OTHER);

 }  

 return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);

}
}
