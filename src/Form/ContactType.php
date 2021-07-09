<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'label' => false,
            ])
            ->add('email', TextType::class,[
                'label' => false,
            ])
            ->add('phone', TextType::class,[
                'label' => false,
            ])
            ->add('message', TextType::class,[
                'label' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
