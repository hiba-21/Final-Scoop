<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('commentaire', TextareaType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('note', NumberType::class, [
                "attr" => [
                    "class" => "notes"
                ]
            ])
            ->add('evaluation', ChoiceType::class, [

                'choices'  => [
                    'Efficacité' => 'efficacité',
                    'Rapidité' => 'rapidité',

                ],

                'expanded' => true,
                'multiple' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
