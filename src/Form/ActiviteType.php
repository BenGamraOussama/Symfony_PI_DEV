<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Patient;
use App\Form\ExerciceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ActiviteType extends AbstractType
{
    // Inside ActiviteType Form

public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('titre')
        ->add('description')
        
        ->add('type', ChoiceType::class, [
            'choices' => [
                'MENTALE' => 'mentale',
                'RELAXATION' => 'relaxation',
                'SOCIALE' => 'sociale',
                'EXERCISE' => 'exercise'
            ],
            'attr' => ['class' => 'form-select'],
            'label' => 'Type',
            'placeholder' => 'Selectionner type'
        ])
        ->add('patients', EntityType::class, [
            'class' => Patient::class,
            'choice_label' => 'name',
            'multiple' => true,
            'required' => false
        ])
        // Set 'mapped' => true so that it gets linked to the 'exercice' field in Activite entity
        ->add('exercice', ExerciceType::class, [
            'label' => 'Exercise Details',
            'required' => false,
            'mapped' => true // Ensure this field is mapped to the Activite's 'exercice' property
        ]);
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Activite::class,
    ]);
}
}
