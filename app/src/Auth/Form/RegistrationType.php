<?php


namespace App\Auth\Form;

use App\Auth\Model\UserModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add("username", TextType::class)
           ->add("firstName", TextType::class)
           ->add("email", EmailType::class)
           ->add("password", RepeatedType::class, [
               "type" => PasswordType::class,
               'first_options' => [
                    'label' => 'Enter password'
                ],
               'second_options' => [
                   'label' => 'Repeat password'
               ]
           ])
           ->add("Submit", SubmitType::class)
       ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserModel::class
        ]);
    }

}