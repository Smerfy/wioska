<?php

namespace StronaBundle\Formularz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class FormularzDomek extends AbstractType{
    
    public function getName() {
        return 'formualrz_domek';
    }
    public function buildForm(FormBuilderInterface $builder, array $optios) {
        $builder
                  ->add('Nazwa', 'text',
                          array(
                    'label' => 'nazwa', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('Adres', 'text',
                        array(
                    'label' => 'adres', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
                ->add('Liczba_miejsc', 'text',
                        array(
                    'label' => 'liczba miejsc', 
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                ))
//                ->add('wyposazeniewyposazenie', 'entity', array(
//                    'class' => 'StronaBundle\Entity\Domek',
//                    'label' => 'WyposazenieID',
//                    'constraints' => array(
//                            new Assert\NotBlank()
//                        )
//                ))
                ->add('wyslij', 'submit',array(
                    'label' => 'wyslij', 
                ));
    }
    //put your code here
}
