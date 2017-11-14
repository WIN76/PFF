<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Formation;
use PFF\BourseBundle\Form\FormationType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FormationController extends Controller
{
    public function addFormAction($id)
    {
        $em = $this->getDoctrine()->getManager(); //preparation pour l'envoi dans la bd
        $formation = new Formation();
        $beneficiaire = $em->getRepository('PFFBourseBundle:Beneficiaire')->find($id);
        $nom=$beneficiaire->getNom();
        $prenom=$beneficiaire->getPrenom();
        $form = $this->createForm(new FormationType(), $formation);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->HandleRequest($request);
            if ($form->isValid()) {
                $formation->setBeneficiaire($beneficiaire);
                $em->persist($formation);
                $em->flush();
                $this->addFlash('info', ' Une formation attribuée ');
                //return $this->redirectToroute($this->generateUrl('pff_form_faculte'));
                return $this->redirectToRoute('formation_liste');
            }
        }
        return $this->render('PFFBourseBundle:Formation:addForm.html.twig', array('form' => $form->createView(),'id'=>$id,'nom'=>$nom,'prenom'=>$prenom));

    }

    public function listeFormAction()
    {
        $em = $this->getDoctrine()->getManager();
        $formation = $em->getRepository('PFFBourseBundle:Formation')->findAll();

        return $this->render('PFFBourseBundle:Formation:listeForm.html.twig', array('formation' => $formation));
    }

    public function editFormAction($id = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) {
            // modification d’un acteur existant : on recherche ses données
            $formation = $em->find('PFFBourseBundle:Formation', $id);

            if (!$formation) {
                $message = 'Aucun acteur trouvé';
            }
        } else {
            // ajout d’un nouvel acteur
            $formation = new Formation();
        }

        $form = $this->container->get('form.factory')->create(new FormationType());
        $form->setData($formation);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em->persist($formation);
                $em->flush();
                $this->addFlash('notice', 'Modification effectuée');
                return $this->redirectToRoute('formation_liste');
            }
        }

        return $this->container->get('templating')->renderResponse(
            'PFFBourseBundle:Formation:editForm.html.twig',
            array(
                'form' => $form->createView(),
                'message' => $message,
                'formation' => $formation
            )
        );
    }

    public function suppFormAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $formation = $em->find('PFFBourseBundle:Formation', $id);

        if (!$formation) {
            throw new NotFoundHttpException("Formation non trouvée");
        }

        $em->remove($formation);
        $em->flush();
        $this->addFlash('alerte', 'Suppression effectuée');
        return $this->redirectToRoute('formation_liste');

    }

    public function detailFormAction($id)
    {
        $formation = $this->getDoctrine()->getManager()->getRepository('PFFBourseBundle:Formation')->find($id);
        return $this->render('PFFBourseBundle:Formation:detailForm.html.twig', array('formation' => $formation));

    }

    public function bFormationAction(){
        $em = $this->getDoctrine()->getManager();
        $bform = $em->getRepository('PFFBourseBundle:Formation')->bFormation();
        return $this->render('PFFBourseBundle:Formation:bformation.html.twig', array('bform' => $bform));
    }
}