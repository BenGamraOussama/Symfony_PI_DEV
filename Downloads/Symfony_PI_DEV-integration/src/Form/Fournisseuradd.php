<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class Fournisseuradd extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', EmailType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un email',
                ]),
                new Email([
                    'message' => 'Veuillez entrer un email valide',
                ]),
            ],
        ])
        ->add('firstName', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un prénom',
                ]),
                new Length([
                    'max' => 255,
                    'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères',
                ]),
            ],
        ])
        ->add('lastName', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez entrer un nom',
                ]),
                new Length([
                    'max' => 255,
                    'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères',
                ]),
            ],
        ])
        ->add('adresse', TextType::class, [
            'required' => true,
            'label' => 'Adresse',
            'attr' => ['maxlength' => 255],
            'constraints' => [
                new NotBlank([
                    'message' => "L'adresse ne peut pas être vide",
                ]),
                new Length([
                    'max' => 255,
                    'maxMessage' => "L'adresse ne peut pas dépasser {{ limit }} caractères",
                ]),
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
