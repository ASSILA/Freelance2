<?php

namespace Freelancer\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Freelancer\MainBundle\Entity\Freelancer;
use Freelancer\MainBundle\Form\FreelancerType;

/**
 * Freelancer controller.
 *
 */
class FreelancerController extends Controller
{

    /**
     * Lists all Freelancer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FreelancerMainBundle:Freelancer')->findAll();

        return $this->render('FreelancerMainBundle:Freelancer:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Freelancer entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Freelancer();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('freelancer_show', array('id' => $entity->getId())));
        }

        return $this->render('FreelancerMainBundle:Freelancer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Freelancer entity.
     *
     * @param Freelancer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Freelancer $entity)
    {
        $form = $this->createForm(new FreelancerType(), $entity, array(
            'action' => $this->generateUrl('freelancer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Freelancer entity.
     *
     */
    public function newAction()
    {
        $entity = new Freelancer();
        $form   = $this->createCreateForm($entity);

        return $this->render('FreelancerMainBundle:Freelancer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Freelancer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Freelancer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freelancer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerMainBundle:Freelancer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Freelancer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Freelancer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freelancer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FreelancerMainBundle:Freelancer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Freelancer entity.
    *
    * @param Freelancer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Freelancer $entity)
    {
        $form = $this->createForm(new FreelancerType(), $entity, array(
            'action' => $this->generateUrl('freelancer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Freelancer entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FreelancerMainBundle:Freelancer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freelancer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('freelancer_edit', array('id' => $id)));
        }

        return $this->render('FreelancerMainBundle:Freelancer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Freelancer entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FreelancerMainBundle:Freelancer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Freelancer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('freelancer'));
    }

    /**
     * Creates a form to delete a Freelancer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('freelancer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
