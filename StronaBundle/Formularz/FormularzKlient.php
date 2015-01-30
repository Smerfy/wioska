<?php

namespace StronaBundle\Formularz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

class FormularzKlient extends AbstractType{
    
    public function getName() {
        return 'formualrz_domek';
    }
    public function buildForm(FormBuilderInterface $builder, array $optios) {
        $builder
                ->add('Imie', 'text',array(
                    'label' => 'imie',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Nazwisko', 'text',array(
                    'label' => 'nazwisko',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Pesel', 'text',array(
                    'label' => 'pesel',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Data_Urodzenia', 'birthday', array(
                    'label' => 'Data-Urodzenia',
                    'empty_value' => '--',
                    'empty_data' => NULL,
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                    
                ))
                ->add('Kod_Pocztowy', 'text',array(
                    'label' => 'kod_pocztowy',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Telefon', 'text',array(
                    'label' => 'telefon',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Miejscowosc', 'text',array(
                    'label' => 'miejscowosc',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Ulica', 'text',array(
                    'label' => 'ulica',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('Data_od', 'birthday', array(
                    'label' => 'Data-rozpoczecia',
                    'empty_value' => '--',
                    'empty_data' => NULL,
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                    
                ))
                ->add('Data_do', 'birthday', array(
                    'label' => 'Data-zakonczenia',
                    'empty_value' => '--',
                    'empty_data' => NULL,
                    'constraints' => array(
                            new Assert\NotBlank()
                        )
                    
                ))
                ->add('domekdomek', 'entity', array(
                    'class' => 'StronaBundle\Entity\Klient',
                    'label' => 'Domek ID',
                    'constraints' => array(
                            new Assert\NotBlank()
                        )))
                ->add('wyslij', 'submit',array(
                    'label' => 'wyslij'));
    }
    //put your code here
}
