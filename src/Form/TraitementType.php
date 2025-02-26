<?php

namespace App\Form;

use App\Entity\Consultation;
use App\Entity\Traitement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class TraitementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('medicament')
            ->add('suivi')
            ->add('consultation', HiddenType::class, [
                'mapped' => false, // Ce champ est géré dans le contrôleur
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Traitement::class,
        ]);
    }
}
