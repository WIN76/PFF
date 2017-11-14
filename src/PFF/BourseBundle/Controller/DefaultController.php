<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indextestAction($name)
    {
        return $this->render('PFFBourseBundle:Default:index.html.twig', array('name' => $name));
    }

    public function layoutAction()
    {
        return $this->render('PFFBourseBundle::layout.html.twig');
    }

    public function indexAction()
    {
        return $this->render('PFFBourseBundle:template:index.html.twig');
    }

    public function listeBeneAction()
    {
        $em = $this->getDoctrine()->getManager();
        $beneficiaire = $em->getRepository('PFFBourseBundle:Beneficiaire')->findAll();

        return $this->render('PFFBourseBundle:template:index.html.twig', array('beneficiaire' => $beneficiaire));
    }

}
