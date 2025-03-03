<?php

namespace App\Form;

use App\Entity\RDV;
use App\Entity\Patient;
use App\Entity\Psychiatre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RDVType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('psychiatre', EntityType::class, [
                'class' => Psychiatre::class,
                'choice_label' => 'firstName',
                'label' => 'Psychiatre',
                'constraints' => [
                    new NotBlank(['message' => 'Psychiatre must be selected.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Psychiatre',
                ],
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Date cannot be empty.']),
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg bg-light fs-6',
                    'placeholder' => 'Date',
                ],
            ])
            ->add('heure', TimeType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Time cannot be empty.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Heure',
                ],
            ])
            ->add('priorite', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En_attente',
                   
                ],
                'label' => 'Priorité',
                'constraints' => [
                    new NotBlank(['message' => 'Priority cannot be empty.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Priorite',
                ],
            ]);
    }
}