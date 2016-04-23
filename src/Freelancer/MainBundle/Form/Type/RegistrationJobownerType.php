<?php

namespace Freelancer\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationJobownerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        // add your custom field
        $builder->add('nom')
                ->add('prenom')
                ->add('adresse')
                ->add('Entreprise','entity',array(
                    'class'=>'FreelancerMainBundle:Entreprise',
                    'property' => 'nom'
                    ));
        }           

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'jobowner_user_registration';
    }

}
