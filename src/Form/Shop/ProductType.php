<?php

namespace App\Form\Shop;

use App\Entity\Shop\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brandName')
            ->add('productName')
            ->add('productType')
            ->add('productDetail', TextareaType::class)
            ->add('size', ChoiceType::class, [
                'choices' => [
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL',
                    'XXL' => 'XXL',
                    'XXXL' => 'XXXL'
                ],
                'placeholder' => 'Select',
                'multiple' => true,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-control select2 rounded-3 shadow-sm',
                    'multiple' => 'multiple',
                ]
            ])
            ->add('price')
            ->add('rating')
            ->add('photo')
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Child' => 'Child',
                ],
                'placeholder' => 'Select',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
