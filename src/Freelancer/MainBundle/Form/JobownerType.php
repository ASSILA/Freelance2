<?php

namespace Freelancer\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobownerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('date_naiss')
            ->add('Entreprise','entity',array(
                    'class'=>'FreelancerMainBundle:Entreprise',
                    'property' => 'nom'
                    ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Freelancer\MainBundle\Entity\Jobowner'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'freelancer_mainbundle_jobowner';
    }
}
