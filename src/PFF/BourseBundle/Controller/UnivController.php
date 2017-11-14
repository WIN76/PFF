<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Universite;
use PFF\BourseBundle\Form\UniversiteType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UnivController extends Controller
{
    public function addunivAction()
    {
        $em = $this->getDoctrine()->getManager();
        //$message=' ';
        $Universite = new Universite();
        $form = $this->createForm(new UniversiteType, $Universite);

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {
                $em->persist($Universite);
                $em->flush();
                $this->addFlash('info', 'Une université ajoutée');

                // $message='Universite ajouté avec succès !';
                return $this->redirectToRoute('universite_liste');
            }
        }

        return $this->render('PFFBourseBundle:Universite:adduniv.html.twig', array('form' => $form->createView()));
    }

    public function listeUnivAction()
    {
        $em = $this->getDoctrine()->getManager();
        $universite = $em->getRepository('PFFBourseBundle:Universite')->findAll();

        return $this->render('PFFBourseBundle:Universite:listeUniv.html.twig', array('universite' => $universite));
    }

    public function editUnivAction($id = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) {
            // modification d’un acteur existant : on recherche ses données
            $universite = $em->find('PFFBourseBundle:Universite', $id);

            if (!$universite) {
                $message = 'Aucun acteur trouvé';
            }
        } else {
            // ajout d’un nouvel acteur
            $universite = new Universite();
        }

        $form = $this->container->get('form.factory')->create(new UniversiteType());
        $form->setData($universite);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em->persist($universite);
                $em->flush();
                $this->addFlash('notice', 'Modification effectuée');
                return $this->redirectToRoute('universite_liste');
            }
        }

        return $this->container->get('templating')->renderResponse(
            'PFFBourseBundle:Universite:editUniv.html.twig',
            array(
                'form' => $form->createView(),
                'message' => $message,
                'universite' => $universite
            )
        );
    }


    public function suppUnivAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $universite = $em->find('PFFBourseBundle:Universite', $id);

        if (!$universite) {
            throw new NotFoundHttpException("Université non trouvée");
        }

        $em->remove($universite);
        $em->flush();
        $this->addFlash('alerte', 'Suppression effectuée');
        return $this->redirectToRoute('universite_liste');

    }
}
  