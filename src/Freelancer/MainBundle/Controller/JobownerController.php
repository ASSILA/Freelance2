<?php

namespace Freelancer\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Freelancer\MainBundle\Entity\Jobowner;
use Freelancer\MainBundle\Form\JobownerType;

/**
 * Jobowner controller.
 *
 */
class JobownerController extends Controller
{

    /**
     * Lists all Jobowner entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerMainBundle:Jobowner')->findAll();

        return $this->render('FreelancerMainBundle:Jobowner:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Jobowner entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Jobowner();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('jobowner_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerMainBundle:Jobowner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Jobowner entity.
     *
     * @param Jobowner $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Jobowner $entity)
    {
        $form = $this->createForm(new JobownerType(), $entity, array(
            'action' => $this->generateUrl('jobowner_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Jobowner entity.
     *
     */
    public function newAction()
    {
        $entity = new Jobowner();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerMainBundle:Jobowner:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Jobowner entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Jobowner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobowner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerMainBundle:Jobowner:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Jobowner entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Jobowner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobowner entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerMainBundle:Jobowner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Jobowner entity.
    *
    * @param Jobowner $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Jobowner $entity)
    {
        $form = $this->createForm(new JobownerType(), $entity, array(
            'action' => $this->generateUrl('jobowner_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Jobowner entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Jobowner')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobowner entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('jobowner_edit', array('id' => $id)));
        }

        return $this->render('FreelancerMainBundle:Jobowner:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Jobowner entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerMainBundle:Jobowner')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Jobowner entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('jobowner'));
    }

    /**
     * Creates a form to delete a Jobowner entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('jobowner_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
