<?php

namespace StronaBundle\Formularz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class FormularzWyposazenie extends AbstractType{
    
    public function getName() {
        return 'formualrz_wyposazenie';
    }
    public function buildForm(FormBuilderInterface $builder, array $optios) {
        $builder
                ->add('TV', 'text', array(
                    'label' => 'tv', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                )
               )
                ->add('Czajnik', 'text', array(
                    'label' => 'czajnik', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ) )
                ->add('Lodowka', 'text', 
                        array(
                    'label' => 'lodowka', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('Microfalowka', 'text', array(
                    'label' => 'microfalowka', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('wifi', 'text', array(
                    'label' => 'wifi', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('lozko1os', 'text', array(
                    'label' => 'lozko1os', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('lozko2os', 'text', array(
                    'label' => 'lozko2os', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('wyslij', 'submit', array(
                    'label' => 'wyslij'
                    ));
    }
    //put your code here
}
