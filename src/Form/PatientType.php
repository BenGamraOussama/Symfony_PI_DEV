<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   
            if ($options['is_admin']) {
                $builder->add('email')
                        ->add('lastName')
                        ->add('firstName')
                ;
            }
            if ($options['is_register']) {
                $builder->add('gener', ChoiceType::class, [
                    'label' => 'Genre',
                    'choices' => [
                        'Femme' => 'female',
                        'Homme' => 'male',
                    ],
                    'expanded' => true, // Afficher les options sous forme de cases à cocher
                    'multiple' => false, // Ne permettre qu'une seule sélection
                    'attr' => [
                        'class' => 'form-check', // Ajouter des classes CSS si nécessaire
                    ],
                ])
                        ->add('adresse')
                        ->add('phone', IntegerType::class)
                        ->add('naissance', DateType::class, [
                            'widget' => 'single_text',
                            'attr' => ['class' => 'form-control'],
                        ]);
            }
            if ($options['on_register']) {
                $builder->add('dossierMedical', FileType::class, [
                    'label' => 'Dossier Medical (PDF file)',
                    'mapped' => false,
                    'required' => false,
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'application/pdf',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid PDF document',
                        ])
                    ],
                ]);
            }
            // Ajouter le champ 'plainPassword' uniquement si l'utilisateur n'est pas connecté
        // Ajouter le champ 'plainPassword' uniquement si l'utilisateur n'est pas connecté
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
            'data_class' => Patient::class,
            // Ajouter une option personnalisée pour déterminer si le formulaire est en mode édition
            'is_edit' => false, // Par défaut, le formulaire n'est pas en mode édition
            'is_admin' => false, // Par défaut, l'utilisateur n'est pas un administrateur
            'is_register' => false, // Par défaut, l'utilisateur n'est pas un administrateur
            'on_register' => false, // Par défaut, l'utilisateur n'est pas un administrateur

        ]);

        // Définir que 'is_edit' est une option autorisée
        $resolver->setAllowedTypes('is_edit', 'bool');
        $resolver->setAllowedTypes('is_admin', 'bool');
        $resolver->setAllowedTypes('is_register', 'bool');
        $resolver->setAllowedTypes('on_register', 'bool');
    }
}
