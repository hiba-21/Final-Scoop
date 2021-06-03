<?php

namespace App\Form;

use App\Entity\InfoBoutique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfoBoutiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('descrip', TextareaType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('type', ChoiceType::class, [
                "attr" => [
                    "class" => "form-control"
                ], 'choices'  => [
                    'Restaurants' => 'Restaurants',
                    'Pizzeria' => 'Pizzeria',
                    'Café' => 'Café',
                ]
            ])
            ->add('email', EmailType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('capital', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('tel', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('siret', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('RCS', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('adresse', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('code_postal', NumberType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('ville', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('pays', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('photos', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InfoBoutique::class,
        ]);
    }
}
