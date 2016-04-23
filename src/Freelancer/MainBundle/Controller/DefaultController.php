<?php

namespace Freelancer\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('FreelancerMainBundle::index.html.twig');
    }

    public function acceuilAction() {
        return $this->render('FreelancerMainBundle:Default:index.html.twig');
    }
    public function choicesAction() {
        return $this->render('FreelancerMainBundle:Registration:choiceRegistration.html.twig');
    }
    public function profAction() {
        $token = $this->get('security.context')->getToken();
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){ 
          return $role->getRole(); 
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true)) {
            return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
        }
        // otherwise, if is a commercial user we redirect to the crm area
        elseif (in_array('ROLE_FREELANCER', $rolesTab, true)) {
             return $this->redirect($this->generateUrl('fos_user_profile_show2'));
            
        }
        elseif (in_array('ROLE_JOBOWNER', $rolesTab, true)) {
            return $this->redirect($this->generateUrl('fos_user_profile_show'));
            
        }
        // otherwise we redirect user to the member area
        else {
            return $this->redirect($this->generateUrl('freelancer_main_acceuil'));
           
        }
    }
    public function tableAction() {
        return $this->container->get('templating')->renderResponse('FreelancerMainBundle:table:pages:tables:simple.html.twig');
    }

}
