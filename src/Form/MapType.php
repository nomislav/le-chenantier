<?php

namespace App\Form;

use App\Entity\Map;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MapType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isValided', CheckboxType::class, [
                'label'         => 'Je veux réserver cet emplacement',
                'attr'          => [
                    'class' => 'col-12'
                ]
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