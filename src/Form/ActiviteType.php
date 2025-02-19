<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Administrateur;
use App\Entity\Patient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Not Started' => 'not_started',
                    'In Progress' => 'in_progress',
                    'Completed' => 'completed'
                ],
                'attr' => ['class' => 'form-select'],
                'label' => 'Status',
                'placeholder' => 'Select status'
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'MENTALE' => 'mentale',
                    'RELAXATION' => 'relaxation',
                    'SOCIALE' => 'sociale'
                ],
                'attr' => ['class' => 'form-select'],
                'label' => 'type',
                'placeholder' => 'Select type'
            ])
            ->add('patient', EntityType::class, [
                'class' => Patient::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
