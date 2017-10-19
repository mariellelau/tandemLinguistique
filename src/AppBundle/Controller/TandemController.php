<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tandem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Tandem controller.
 *
 */
class TandemController extends Controller
{
    /**
     * Lists all tandem entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tandems = $em->getRepository('AppBundle:Tandem')->findAll();

        return $this->render('@App/tandem/index.html.twig', array(
            'tandems' => $tandems,
        ));
    }

    /**
     * Creates a new tandem entity.
     *
     */
    public function newAction(Request $request)
    {
        $session = $this->get('request')->getSession();


        $tandem = new Tandem();
        $form = $this->createForm('AppBundle\Form\TandemType', $tandem);
        $form->handleRequest($request);

        if ($tandem->getUser()){
            $this->container->get('session')->getFlashBag()->set(
                'notice', 'Vous avez un tandem'
            );
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tandem);
            $em->flush();

            return $this->redirectToRoute('app_admin', array('id' => $tandem->getId()));
        }

        return $this->render('@App/tandem/new.html.twig', array(
            'tandem' => $tandem,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tandem entity.
     *
     */
    public function showAction(Tandem $tandem)
    {
        $deleteForm = $this->createDeleteForm($tandem);

        return $this->render('@App/tandem/show.html.twig', array(
            'tandem' => $tandem,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tandem entity.
     *
     */
    public function editAction(Request $request, Tandem $tandem)
    {
        $deleteForm = $this->createDeleteForm($tandem);
        $editForm = $this->createForm('AppBundle\Form\TandemType', $tandem);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tandem_edit', array('id' => $tandem->getId()));
        }

        return $this->render('@App/tandem/edit.html.twig', array(
            'tandem' => $tandem,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tandem entity.
     *
     */
    public function deleteAction(Request $request, Tandem $tandem)
    {
        $form = $this->createDeleteForm($tandem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tandem);
            $em->flush();
        }

        return $this->redirectToRoute('tandem_index');
    }

    /**
     * Creates a form to delete a tandem entity.
     *
     * @param Tandem $tandem The tandem entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tandem $tandem)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tandem_delete', array('id' => $tandem->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
