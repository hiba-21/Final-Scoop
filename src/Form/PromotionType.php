<?php

namespace App\Form;

use App\Entity\Produits;
use App\Entity\Promotion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('lastNAme', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('repetition', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('quantite', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('type', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('Montant', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])

            ->add('produits', EntityType::class, [
                'class' => Produits::class,
                'multiple' => true,
                'choice_label' => 'nom',
                'label' => 'Choix du produit remisé '
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
