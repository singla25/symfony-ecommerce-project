<?php

namespace App\Form\Shop;

use App\Entity\Shop\Product;
use Symfony\Component\Form\AbstractType;
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
            ->add('productDetail', TextareaType::class, [
                'required' => false,
                'label' => false,
            ])
            ->add('price')
            ->add('rating')
            ->add('photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
