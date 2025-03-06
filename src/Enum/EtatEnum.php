<?php
namespace App\Enum;

enum EtatEnum: string
{
    case EN_ATTENTE = 'En attente';
    case ACCEPTED = 'Accepted';     
    case CANCELED = 'Canceled';     
    case PAYE = 'Paye';
    case ANNULE = 'Annulé';
    case REMBOURSE = 'Remboursé';


public function new(Request $request): Response
{
    $consultation = new Consultation();
    $form = $this->createForm(ConsultationType::class, $consultation);

    // Pass the StatusEnum values to the template
    $etatEnum = EtatEnum::cases();

    return $this->render('consultation/new.html.twig', [
        'form' => $form->createView(),
        'etat_enum' => $etatEnum, // Pass the enum values
    ]);
}}