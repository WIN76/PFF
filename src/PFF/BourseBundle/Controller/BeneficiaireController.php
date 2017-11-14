<?php

namespace PFF\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\BourseBundle\Entity\Beneficiaire;
use PFF\BourseBundle\Form\BeneficiaireType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BeneficiaireController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        $beneficiaire = new Beneficiaire();
        $form = $this->createForm(new BeneficiaireType, $beneficiaire);

        $facultes = $em->getRepository('PFFBourseBundle:Faculte')->findAll();
        $der=$em->getRepository('PFFBourseBundle:Beneficiaire')->dernierIdBene();
        $dernier_id=$der[0]->getId()+1;
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {
                $matricules = $em->getRepository('PFFBourseBundle:Beneficiaire')->matricule();
                $beneficiaires = $em->getRepository('PFFBourseBundle:Beneficiaire')->findAll();
                $existe = false;
                $an=new \DateTime("now");
                $an=$an->format("Y");
                $num=$beneficiaire->getFaculte().$an.$beneficiaire->getSexe().$dernier_id;
                $numMlle = $beneficiaire->getNumMlle();
                $nom = $beneficiaire->getNom();
                $prenom = $beneficiaire->getPrenom();
                foreach ($beneficiaires as $b) {
                    if ($b->getNumMlle() == $numMlle) {
                        $existe = true;
                    }
                }
                if ($existe) {
                    $this->addFlash(
                        'info', 'Le numero ' . $numMlle . ' existe déjà'
                    );
                    return $this->render('PFFBourseBundle:Beneficiaire:ajout.html.twig', array('form' => $form->createView()));

                }
                $beneficiaire->setAnenr($an);
                $beneficiaire->setNumMlle($num);
                $em->persist($beneficiaire);
                $em->flush();
                $this->addFlash(
                    'info', 'La personne ' . $nom .'  '.$prenom . ' avec l\'identifiant '. $num .' a été ajoutée avec succès '
                );

                return $this->redirectToRoute('beneficiaire_ajout');

            }
        }

        return $this->render('PFFBourseBundle:Beneficiaire:ajout.html.twig', array('form' => $form->createView(),'fac'=>$facultes));
    }

    public function listeBenefAction()
    {
        $em = $this->getDoctrine()->getManager();
        $beneficiaire = $em->getRepository('PFFBourseBundle:Beneficiaire')->findAll();

        return $this->render('PFFBourseBundle:Beneficiaire:listeBenef.html.twig', array('beneficiaire' => $beneficiaire));
    }

    public function editBenefAction($id = null)
    {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        if (isset($id)) {
            // modification d’un acteur existant : on recherche ses données
            $beneficiaire = $em->find('PFFBourseBundle:Beneficiaire', $id);

            if (!$beneficiaire) {
                $message = 'Aucun acteur trouvé';
            }
        } else {
            // ajout d’un nouvel acteur
            $beneficiaire = new Beneficiaire();
        }

        $form = $this->container->get('form.factory')->create(new BeneficiaireType());
        $form->setData($beneficiaire);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em->persist($beneficiaire);
                $em->flush();
                $this->addFlash('notice', 'modification effectuée');
                return $this->redirectToRoute('beneficiaire_liste');
            }

        }

        return $this->container->get('templating')->renderResponse(
            'PFFBourseBundle:Beneficiaire:editBenef.html.twig',
            array(
                'form' => $form->createView(),
                'message' => $message,
                'beneficiaire' => $beneficiaire
            )
        );
    }

    public function suppBenefAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $beneficiaire = $em->find('PFFBourseBundle:Beneficiaire', $id);

        $formations = $em->getRepository('PFFBourseBundle:Formation')->findAll();
        $existe = false;
        $idd = $beneficiaire->getId();
        foreach ($formations as $b) {
            if ($b->getId() == $idd) {
                $existe = true;
            }
        }
        if ($existe) {
            $this->addFlash(
                'infosup', 'Impossible de supprimer ce bénéficiaire, il bénéficie déja d\'une formation'
            );

            return $this->redirectToRoute('beneficiaire_liste');

        }


            $em->remove($beneficiaire);
            $em->flush();
            $this->addFlash('alerte', 'suppression effectuée');
            return $this->redirectToRoute('beneficiaire_liste');

    }

    public function detailBenefAction($id)
    {
        $beneficiaire = $this->getDoctrine()->getManager()->getRepository('PFFBourseBundle:Beneficiaire')->find($id);
        return $this->render('PFFBourseBundle:Beneficiaire:detailBenef.html.twig', array('beneficiaire' => $beneficiaire));

    }
    public function statAction(){
        $em = $this->getDoctrine()->getManager();
        $iug = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqiug();
        $fst = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfst();
        $fhg = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfhg();
        $fseg = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfseg();
        $fdpri = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfdpri();
        $fdpu = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfdpu();
        $fmp = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfmp();
        $fmpos = $em->getRepository('PFFBourseBundle:Beneficiaire')->reqfmpos();
        $bene2016 = $em->getRepository('PFFBourseBundle:Beneficiaire')->nb2016();
        $bene2017 = $em->getRepository('PFFBourseBundle:Beneficiaire')->nb2017();
        $bene2015 = $em->getRepository('PFFBourseBundle:Beneficiaire')->nb2015();
        return $this->render('PFFBourseBundle:Statistique:sta.html.twig',array('nbb2017' => $bene2017,'nbb2016' => $bene2016,'nbb2015' => $bene2015,'iug' => $iug,'fst' =>  $fst,'fhg' => $fhg,'fseg' => $fseg,
            'fdpri'=>$fdpri, 'fdpu'=>$fdpu, 'fmp'=>$fmp, 'fmpos'=>$fmpos));
    }
}