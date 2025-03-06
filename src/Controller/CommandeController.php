<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Form\Commande1Type;
use App\Form\LigneCommandeType;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\SvgWriter;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

#[Route('/commande')]
final class CommandeController extends AbstractController{

 
    


    #[Route('/imprimer/{id}', name: 'imprimer_dossier')]
    public function imprimer(Pdf $pdf, int $id,CommandeRepository $dr , Environment $twig): Response
    {
    $html = $twig->render('cart/pdf.html.twig', [
        'commande' => $dr->find($id)
    ]);

    // Générer le PDF
    $pdfContent = $pdf->getOutputFromHtml($html);

    // Retourner le fichier PDF en réponse
    return new Response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="commande.pdf"'
    ]);
}

     #[Route('/admin', name: 'app_commande_index_admin')]
    public function andexadmin( UserRepository $userRepo,CommandeRepository $commandeRepository,Request $request ,PaginatorInterface $paginator): Response
    {


        $users = $userRepo->findAll();
        
        $nomUser = [];
        $nombreCommandes = [];

        foreach ($users as $user) {
            $nomUser[] = $user->getLastName(). " " . $user->getFirstName();
            $nombreCommandes[] = $commandeRepository->count(['user' => $user]);
        }
 




        $pagination = $paginator->paginate(
            $commandeRepository->findAll(),
            $request->query->getInt('page', 1),
            4  // items per page
        );



        return $this->render('commande/index_admin.html.twig', [
            'commandes' => $pagination,
            'nomUser' => $nomUser,
            'nombreCommandes' => $nombreCommandes
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


        $user = $this->getUser();

    $data =  $user->getFirstName() . ' | Commande passé le : ' .  $commande->getDateCommande()->format('d/m/Y H:i:s') .'prix : '.$commande->getMontantTotal();

    $result = Builder::create()
    ->writer(new SvgWriter())
    ->data($data)
     ->encoding(new Encoding('UTF-8'))
     ->errorCorrectionLevel(ErrorCorrectionLevel::Medium)
     ->size(300)
    // ->logoPath($logoPath) // Add logo
     //->logoPunchoutBackground(true)
     ->margin(10)
     ->build();

 // Generate a Data URI to include image data inline
 $dataUri = $result->getDataUri();


        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
            'qr' => $dataUri
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
            // Remove all existing LigneCommande entities associated with the Commande
            foreach ($commande->getLignes() as $ligne) {
                $entityManager->remove($ligne);
            }
            $entityManager->flush();
    
            // Recalculate the total amount and persist new LigneCommande entities
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
