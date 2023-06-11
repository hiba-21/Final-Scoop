<?php

namespace App\Form;

use App\Entity\Contact1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('prenom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('email', EmailType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('tel', TelType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('message', TextareaType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('Problem', ChoiceType::class, [

                'choices'  => [
                    'Temp de reponse long' => 'Temp de reponse long',
                    'design' => 'design',

                ],

                'expanded' => true,
                'multiple' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact1::class,
        ]);
    }
}
