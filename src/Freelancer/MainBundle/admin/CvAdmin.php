<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Freelancer\MainBundle\admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CvAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
           
           // ->add('cvEmail')
            ->add('language')
            ->add('experience')
            ->add('dateModif')
            
                
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('cvEmail')
            ->add('language')
            ->add('experience')
            ->add('dateModif')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('cvEmail')
            ->add('language')
            ->add('experience')
            ->add('dateModif')
        ;
    }
}

