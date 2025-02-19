<?php


namespace App\Form;

use App\Enum\EtatEnum;
use App\Entity\Consultation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class ConsultationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text', // Renders as a single input (HTML5 date picker)
                'html5' => true, // Enables HTML5 date picker
                'constraints' => [
                    new NotBlank(['message' => 'La date ne peut pas être vide.']),
                ],
            ])
            ->add('heure', TimeType::class, [
                'widget' => 'single_text', // Renders as a single input (HTML5 time picker)
                'html5' => true, // Enables HTML5 time picker
                'constraints' => [
                    new NotBlank(['message' => 'L\'heure ne peut pas être vide.']),
                ],
            ])
            ->add('prix', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prix ne peut pas être vide.']),
                    new Positive(['message' => 'Le prix doit être un nombre positif.']),
                ],
            ])
            ->add('modeconsultation', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le mode de consultation ne peut pas être vide.']),
                ],
            ])
            ->add('etaenum', ChoiceType::class, [
                'choices' => EtatEnum::cases(), // Récupère toutes les valeurs de l'énumération
                'choice_label' => fn(EtatEnum $choice) => $choice->value, // Affiche la valeur de l'énumération
                'choice_value' => fn(?EtatEnum $enum) => $enum?->value, // Convertit en valeur exploitable
                'placeholder' => 'Sélectionnez un état', // Optionnel : ajoute un choix vide
                'constraints' => [
                    new NotBlank(['message' => 'L\'état ne peut pas être vide.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Consultation::class,
        ]);
    }
}