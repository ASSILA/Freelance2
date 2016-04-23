<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller {

    /**
     * Show the user
     */
    public function showAction() {
        // On récupère la liste des rôles d'un utilisateur

        $response = "";
        if ($this->get('security.context')->isGranted('ROLE_JOBOWNER')) {
            $response = "JOBOWNER";
        }

        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->container->get('doctrine')->getEntityManager();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
                     'r' => $response, 'projetsNotif' => $projetsNotif, 'v' => $v
        ));
    }

    public function show2Action() {
        // On récupère la liste des rôles d'un utilisateur

        $response = "";
        if ($this->get('security.context')->isGranted('ROLE_FREELANCER')) {
            $response = "FREELANCER";
        }
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->container->get('doctrine')->getEntityManager();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getSatus() != 0) {
                $v+=1;
            }
        }
        $x = null;
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0, 'emailfreelancer' => $x));
        return $this->render('FOSUserBundle:Profile:show2.html.twig', array(
                   'r' => $response, 'projects' => $projets, 'projetsNotif' => $projetsNotif, 'v' => $v
        ));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show2');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }
        $em = $this->container->get('doctrine')->getEntityManager();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
                    'form' => $form->createView(), 'projetsNotif' => $projetsNotif, 'v' => $v
        ));
    }

        public function edit2Action(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }
        $em = $this->container->get('doctrine')->getEntityManager();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FOSUserBundle:Profile:edit2.html.twig', array(
                    'form' => $form->createView(), 'projetsNotif' => $projetsNotif, 'v' => $v
        ));
    }
}
