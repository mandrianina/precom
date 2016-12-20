<?php

namespace BYD\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->add('choixRole', ChoiceType::class, array(
                    'choices' => array(
                        'freelancer' => 'Un freelancer'  ,
                        'porteur' => 'Un porteur de mission'  
                    )
                ));
    }
    

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    
    public function getName(){
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'byd_user_registration';
    }

}
