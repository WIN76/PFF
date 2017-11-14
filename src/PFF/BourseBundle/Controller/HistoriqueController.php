<?php
/**
 * Created by PhpStorm.
 * User: SORY
 * Date: 15/07/2017
 * Time: 13:00
 */

namespace PFF\BourseBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Historique;
use PFF\BourseBundle\Form\HistoriqueType;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HistoriqueController extends Controller
{
    public function addHistAction($id){

        $em = $this->getDoctrine()->getManager(); //preparation pour l'envoi dans la bd
        $historique = new Historique();

        $bene = $em->getRepository('PFFBourseBundle:Beneficiaire')->find($id);
        $nom=$bene->getNom();
        $prenom=$bene->getPrenom();
        $beneficiaires= $em->getRepository('PFFBourseBundle:Beneficiaire')->findAll();
        $form = $this->createForm(new HistoriqueType(), $historique);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->HandleRequest($request);
            if ($form->isValid()) {
                $historique->setBeneficiaire($bene);
                $em->persist($historique);
                $em->flush();
                $this->addFlash('info', 'Un fonds attribué');
            }
        }
        return $this->render('PFFBourseBundle:Historique:addHist.html.twig', array('form' => $form->createView(),'id'=>$id,'nom'=>$nom,'prenom'=>$prenom));
    }

    public function bFondsHistAction($id){
        $em = $this->getDoctrine()->getManager();
        $beneficiaire= $em->getRepository('PFFBourseBundle:Beneficiaire')->find($id);
        $formation= $em->getRepository('PFFBourseBundle:Formation')->findBy(array('Beneficiaire'=> $beneficiaire));
        $bform = $em->getRepository('PFFBourseBundle:Historique')->bFondsHist($id);
        return $this->render('PFFBourseBundle:Historique:bfondshist.html.twig', array('formation'=>$formation,'bene'=> $beneficiaire,'bform' => $bform));
    }
    public function listBeneFondAction()
    {
        $em = $this->getDoctrine()->getManager();
        $hist = $em->getRepository('PFFBourseBundle:Historique')->findAll();

        return $this->render('PFFBourseBundle:Historique:listBeneFond.html.twig', array('hist' => $hist));
    }
}