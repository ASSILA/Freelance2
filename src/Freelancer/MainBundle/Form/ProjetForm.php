<?php
namespace Freelancer\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjetForm
 *
 * @author X230
 */
class ProjetForm extends AbstractType{
    
    
        public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder 
                ->add('nom')
                ->add('budget')
                ->add('checkIn','date')
                ->add('checkOut','date')
                ->add('description')
                ->add('valider','submit')
                ->add('annuler','reset');        
    }
    public function getName() {
        return 'Projet';
    }

//put your code here
}
