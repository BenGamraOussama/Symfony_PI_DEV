<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;

class FournisseurType extends AbstractType
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
        if (!$options['is_edit']) {
            $builder->add('plainPassword', PasswordType::class, [
                // Ce champ n'est pas mappé directement à l'entité
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        // Longueur maximale autorisée par Symfony pour des raisons de sécurité
                        'max' => 4096,
                     ]),
                  ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
            'is_edit' => false, // Par défaut, le formulaire n'est pas en mode édition
        ]);
        $resolver->setAllowedTypes('is_edit', 'bool');
    }
}
