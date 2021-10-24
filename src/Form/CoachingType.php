<?php

namespace App\Form;

use App\Entity\Coaching;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('slug')
            ->add('image')
            ->add('description')
            ->add('minutes')
            ->add('intensite')
            ->add('name_b')
            ->add('description_b')
            ->add('name_c')
            ->add('description_c')
            ->add('image_b')
            ->add('image_c')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coaching::class,
        ]);
    }
}
