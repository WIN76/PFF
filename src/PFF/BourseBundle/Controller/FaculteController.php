<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Faculte;
use PFF\BourseBundle\Form\FaculteType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FaculteController extends Controller
{
    public function listeFactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $faculte = $em->getRepository('PFFBourseBundle:Faculte')->findAll();
        return $this->render('PFFBourseBundle:Faculte:ListeFaculte.html.twig', array('faculte' => $faculte));
    }

    public function formFactAction()
    {
        $em = $this->getDoctrine()->getManager(); //preparation pour l'envoi dans la bd
        $faculte = new Faculte();
        $form = $this->createForm(new FaculteType(), $faculte);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->HandleRequest($request);
            if ($form->isValid()) {
                $em->persist($faculte);
                $em->flush();
                $this->addFlash('info', ' Une faculté ajoutée ');
                //return $this->redirectToroute($this->generateUrl('pff_form_faculte'));
                return $this->redirectToRoute('faculte_liste');
            }
        }
        return $this->render('PFFBourseBundle:Faculte:faculte.html.twig', array('form' => $form->createView()));
    }

    public function editerAction($id = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) {
            // modification d’une faculte existante : on recherche ses données
            $faculte = $em->find('PFFBourseBundle:Faculte', $id);

            if (!$faculte) {
                $message = 'Aucun acteur trouvé';
            }
        } else {
            // ajout d’une nouvelle faculte
            $faculte = new Faculte();
        }

        $form = $this->container->get('form.factory')->create(new FaculteType());
        $form->setData($faculte);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em->persist($faculte);
                $em->flush();
                $this->addFlash('notice', 'modification effectuée');
                return $this->redirectToRoute('faculte_liste');
            }
        }

        return $this->container->get('templating')->renderResponse(
            'PFFBourseBundle:Faculte:editFac.html.twig',
            array(
                'form' => $form->createView(),
                'message' => $message,
                'faculte' => $faculte
            )
        );
    }

    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $faculte = $em->find('PFFBourseBundle:Faculte', $id);

        if (!$faculte) {
            throw new NotFoundHttpException("faculté non trouvé");
        }

        $em->remove($faculte);
        $em->flush();
        $this->addFlash('alerte', 'suppression effectuée');
        return $this->redirectToRoute('faculte_liste');

    }
}
