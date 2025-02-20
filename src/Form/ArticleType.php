<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title', TextType::class, [
            'label' => 'Title',
            'attr' => ['class' => 'form-control']
        ])
        ->add('content', TextareaType::class, [
            'label' => 'Content',
            'attr' => ['class' => 'form-control']
        ])
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'choice_label' => 'name',
            'label' => 'Category',
            'attr' => ['class' => 'form-control']
        ])
        ->add('mediaPath', FileType::class, [
            'label' => 'Upload Image (optional)',
            'mapped' => false, // Don't automatically map this to the entity
            'required' => false, // Make it optional
           
            'attr' => ['class' => 'form-control']
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Save Article',
            'attr' => ['class' => 'btn btn-primary']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
