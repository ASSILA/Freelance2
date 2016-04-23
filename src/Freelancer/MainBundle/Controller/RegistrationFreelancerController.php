<?php

namespace Freelancer\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationFreelancerController extends Controller {

    public function registerAction() {
        return $this->container
                        ->get('pugx_multi_user.registration_manager')
                        ->register('Freelancer\MainBundle\Entity\Freelancer');
         
        }

    
}