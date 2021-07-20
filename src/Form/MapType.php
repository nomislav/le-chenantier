<?php

namespace App\Form;

use App\Entity\Map;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime("now")
            ])
            ->add('end', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime("now")
            ])
            ->add('adult', IntegerType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 100,
                    'placeholder' => 'Adulte(s)'
                ]
            ])
            ->add('child', IntegerType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 100,
                    'placeholder' => 'Enfant(s)'
                ]
            ])
            ->add('tent', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('caravan', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('electricity', ChoiceType::class, [
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label'         => 'Soumettre ma demande'
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Map::class,
        ]);
    }
}