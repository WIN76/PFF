<?php

namespace PFF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PFFUserBundle:Default:index.html.twig', array('name' => $name));
    }

     public function listeUtilAction()
    {
    	$em=$this->getDoctrine()->getManager();
    	$user=$em->getRepository('PFFUserBundle:User')->findAll();

        return $this->render('PFFUserBundle:Default:listeUtil.html.twig',array('user'=>$user));
    }

     public function suppUtilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->find('PFFUserBundle:User', $id);
        
        if (!$user) 
        {
            throw new NotFoundHttpException("User non trouvé");
        }
        
        $em->remove($user);
        $em->flush();
        $this->addFlash('alerte', 'Suppression effectuée');
        return $this->redirectToRoute('pff_listeUtilisateur');
    
    }
}
