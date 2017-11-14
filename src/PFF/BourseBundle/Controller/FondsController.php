<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Fonds;
use PFF\BourseBundle\Form\FondsType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FondsController extends Controller
{
    public function addFondsAction()
    {
        $em = $this->getDoctrine()->getManager(); //preparation pour l'envoi dans la bd
        $fonds = new Fonds();
        $form = $this->createForm(new FondsType(), $fonds);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->HandleRequest($request);
            if ($form->isValid()) {
                $em->persist($fonds);
                $em->flush();
                $this->addFlash('info', ' Un fonds attribué ');
                //return $this->redirectToroute($this->generateUrl('pff_form_faculte'));
                return $this->redirectToRoute('fonds_liste');
            }
        }
        return $this->render('PFFBourseBundle:Fonds:addFonds.html.twig', array('form' => $form->createView()));
    }

    public function listeFondsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $fonds = $em->getRepository('PFFBourseBundle:Fonds')->findAll();

        return $this->render('PFFBourseBundle:Fonds:listeFonds.html.twig', array('fonds' => $fonds));
    }

    public function editFondsAction($id = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) {
            // modification d’un acteur existant : on recherche ses données
            $fonds = $em->find('PFFBourseBundle:Fonds', $id);

            if (!$fonds) {
                $message = 'Aucun acteur trouvé';
            }
        } else {
            // ajout d’un nouvel acteur
            $fonds = new Fonds();
        }

        $form = $this->container->get('form.factory')->create(new FondsType());
        $form->setData($fonds);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em->persist($fonds);
                $em->flush();
                $this->addFlash('notice', 'Modification effectuée');
                return $this->redirectToRoute('fonds_liste');
            }

        }

        return $this->container->get('templating')->renderResponse(
            'PFFBourseBundle:Fonds:editFonds.html.twig',
            array(
                'form' => $form->createView(),
                'message' => $message,
                'fonds' => $fonds
            )
        );
    }

    public function suppFondsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $fonds = $em->find('PFFBourseBundle:Fonds', $id);

        if (!$fonds) {
            throw new NotFoundHttpException("Fonds non trouvé");
        }

        $em->remove($fonds);
        $em->flush();
        $this->addFlash('alerte', 'Suppression effectuée');
        return $this->redirectToRoute('fonds_liste');

    }

    public function detailFondsAction($id)
    {
        $fonds = $this->getDoctrine()->getManager()->getRepository('PFFBourseBundle:Fonds')->find($id);
        return $this->render('PFFBourseBundle:Fonds:detailFonds.html.twig', array('fonds' => $fonds));

    }
}