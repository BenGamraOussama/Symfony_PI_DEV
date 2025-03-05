<?php

namespace App\Form;

use App\Entity\RDV;
use App\Entity\Patient;
use App\Entity\Psychiatre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType; // Use TimeType for time input
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RDVType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('heure', TimeType::class, [ // Use TimeType for time input
                'widget' => 'single_text', // Render as a single input (HTML5 time input)
                'label' => 'Time',
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add Bootstrap class
                ],
            ])
            ->add('priorite', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En_attente',
                    'Payé' => 'PAYE',
                    'Annulé' => 'ANNULE',
                    'Remboursé' => 'REMBOURSE',
                ],
                'label' => 'Priority',
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add Bootstrap class
                ],
            ])
            ->add('patient', EntityType::class, [
                'class' => Patient::class,
                'choice_label' => 'firstName', // Ensure this matches a property in the Patient entity
                'label' => 'Patient',
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add Bootstrap class
                ],
            ])
            ->add('psychiatre', EntityType::class, [
                'class' => Psychiatre::class,
                'choice_label' => 'firstName', // Ensure this matches a property in the Psychiatre entity
                'label' => 'Psychiatrist',
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add Bootstrap class
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RDV::class,
        ]);
    }
}