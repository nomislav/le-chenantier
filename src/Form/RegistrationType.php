<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => false
            ])
            ->add('firstName', TextType::class, [
                'label' => false
            ])
            ->add('lastName', TextType::class, [
                'label' => false
            ])
            ->add('phone', TelType::class, [
                'label' => false
            ])
            ->add('address', TextType::class, [
                'label' => false
            ])
            ->add('password', PasswordType::class, [
                'label' => false
            ])
            ->add('confirmPassword', PasswordType::class, [
                'label' => false
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
