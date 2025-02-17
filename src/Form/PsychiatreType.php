<?php

namespace App\Form;

use App\Entity\Psychiatre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PsychiatreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('email')
            ->add('lastName')
            ->add('firstName')
            ->add('specialite')
            ->add('numLicence', TextType::class)
            ->add('phone', IntegerType::class)
            ->add('adresse');
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
            'data_class' => Psychiatre::class,
            'is_edit' => false, // Par défaut, le formulaire n'est pas en mode édition
        ]);
        $resolver->setAllowedTypes('is_edit', 'bool');
    }
}
