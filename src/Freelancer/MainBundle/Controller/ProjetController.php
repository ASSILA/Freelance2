<?php

namespace Freelancer\MainBundle\Controller;

use Freelancer\MainBundle\Entity\Projet;
use Freelancer\MainBundle\Form\ProjetForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjetController extends Controller {

    public function addAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = new Projet();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(['satus'=>0]);
        $form = $this->container->get('form.factory')->create(new ProjetForm(), $projets);
        $Request = $this->getRequest();
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        $ps = $em->getRepository('FreelancerMainBundle:Projet')->findAll();
        $test = TRUE;
        foreach ($ps as $p) {
            if ($projets->getNom() === $p->getNom()) {
                $test = FALSE;
            }
        }
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid() && $test) {
                $projets->setemail($this->getUser()->getEmail());
                $projets->setsatus(0);
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($projets);
                $em->flush();
                return $this->redirect($this->generateUrl('freelancer_main_list_projet'));
            }
        }
        return $this->render('FreelancerMainBundle:Projet:add.html.twig', array(
                    'projetsNotif' => $projetsNotif, 'form' => $form->createView(), 'v' => $v
        ));
    }

    public function listAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $null=null;
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0, 'email' => $this->getUser()->getEmail(), 'emailfreelancer' =>$null));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(['satus'=>0]);
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:listProjet.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets,'v' => $v));
    }

    public function listencoursfAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 1, 'emailfreelancer' => $this->getUser()->getEmail()));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getSatus() !== 0) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:ListProjetencoursf.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets, 'v' => $v));
    }

    public function listencoursAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 1, 'email' => $this->getUser()->getEmail()));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(['satus'=>0]);
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:listProjet.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets, 'v' => $v));
    }

    public function listtraitefAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 2, 'emailfreelancer' => $this->getUser()->getEmail()));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getSatus() !== 0) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:ListProjettraitef.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets,'v'=>$v));
    }

    public function listtraiteAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 2, 'email' => $this->getUser()->getEmail()));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(['satus'=>0]);
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:listProjet.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets,'v'=>$v));
    }

    public function listdispoAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $x = null;
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0, 'emailfreelancer' => $x));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getSatus() !== 0) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:listProjetDispo.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projets,'v'=>$v));
    }

    public function searchAction() {
        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findAll();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(['satus'=>0]);
        $Request = $this->get('request');
        if ($Request->getMethod() == "POST") {
            $search = $Request->get('search');
            $query = $em->createQuery('SELECT P
                FROM FreelancerMainBundle:Projet P
                WHERE P.budget =:no or P.satus  =:no or  P.nom like :no')->setParameter('no', '%' . $search . '%');
            $projets = $query->getResult();
        }
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:recherche.html.twig', array("projetsNotif" => $projetsNotif,"projets" => $projets,'v'=>$v));
    }
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);
        $em->remove($projet);
        $em->flush();
        return $this->redirect($this->generateUrl("freelancer_main_list_projet"));
    }

    public function updateAction($id) {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);
        $form = $this->createForm(new ProjetForm(), $projet);
        $request = $this->get('request');

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($projet);
            $em->flush();
            return $this->redirect($this->generateUrl('freelancer_main_list_projet'));
        }

        return $this->render('FreelancerMainBundle:Projet:update.html.twig', array('Form' => $form->createView()));
    }

    public function deposerAction($id) {
        $projets = new Projet();
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);

        $projets->setnom($projet->getnom());
        $projets->setemail($projet->getemail());
        $projets->setsatus(0);
        $projets->setbudget($projet->getbudget());
        $projets->setcheckin($projet->getcheckin());
        $projets->setcheckout($projet->getcheckout());
        $projets->setdescription($projet->getdescription());
        $projets->setemailFreelancer($this->getUser()->getEmail());
        if (true) {
            $em->persist($projets);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('freelancer_main_listdispo_projet'));
    }

    public function listconfirmerAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getEmailfreelancer() != null) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:ListCandidature.html.twig', array('projetsNotif' => $projetsNotif,'projets' => $projetsNotif, 'v' => $v));
    }

    public function confirmerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);
        $projet->setSatus(1);
        $em->persist($projet);
        $em->flush();
        $p = $em->getRepository('FreelancerMainBundle:Projet')->findoneby(array('satus' => 0, 'nom' => $projet->getnom(), 'description' => $projet->getdescription()));
        if ($p != null) {
            $em->remove($p);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('freelancer_main_listconfirmer_projet'));
    }

    public function telechargerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);

        //  $request = $this->get('request');
        // $form->handleRequest($request);
//        if ($form->isValid()) 
//        {
//            $em->persist($projet);
//            $em->flush();
//            return $this->redirect($this->generateUrl('freelancer_main_list_projet'));
//        }
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('FreelancerMainBundle:Projet:telecharger.html.twig', array('projet' => $projet));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Facture.pdf');


        return new Response();
    }

    public function listprojetdeposerAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $projets = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('satus' => 0, 'emailfreelancer' => $this->getUser()->getEmail()));
        $projetsNotif = $em->getRepository('FreelancerMainBundle:Projet')->findBy(array('emailfreelancer' => $this->getUser()->getEmail()));
        $v = 0;
        foreach ($projetsNotif as $p) {
            if ($p->getSatus() !== 0) {
                $v+=1;
            }
        }
        return $this->render('FreelancerMainBundle:Projet:ListProjetDepose.html.twig', array('projets' => $projets,'projetsNotif' => $projetsNotif,'v'=>$v));
    }

    public function retirercandidatureAction($id) {

        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('FreelancerMainBundle:Projet')->find($id);
        if ($projet->getSatus()!==1) {
            $em->remove($projet);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('freelancer_main_listdepose_projet'));
    }

}
