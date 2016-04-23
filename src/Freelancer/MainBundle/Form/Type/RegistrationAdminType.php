<?php

namespace Freelancer\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationAdminType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        // add your custom field
        $builder->add('nom')
                ->add('prenom')
                ->add('adresse');
        }           

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'admin_user_registration';
    }

}
