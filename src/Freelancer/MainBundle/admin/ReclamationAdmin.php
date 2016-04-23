<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Freelancer\MainBundle\admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ReclamationAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
           
            ->add('objet')
            ->add('enonce')
            ->add('email')
            ->add('dest')
            ->add('date')
                
            
                
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('nom')
            ->add('budget')
            ->add('checkIn')
            ->add('checkOut')
                //if no type is specified, SonataAdminBundle tries to guess it
            ->add('satus')
            ->add('emailfreelancer')
            ->add('description')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('email')
            ->add('nom')
            ->add('budget')
            ->add('checkIn')
            ->add('checkOut')
                //if no type is specified, SonataAdminBundle tries to guess it
            ->add('satus')
            ->add('emailfreelancer')
            ->add('description')
        ;
    }
}

