<?php

namespace PFF\BourseBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PFF\UserBundle\Entity\User;
use PFF\BourseBundle\Form\MamaType;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{

    public function testAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new MamaType);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $user = new User();
            //$factory = $this->get('security.encoder_factory');
            $username = $form['username']->getData();
            $email = $form['email']->getData();
            $password = $form['password']->getData();
            $repeatPassword = $form['repeatPassword']->getData();
            $users = $em->getRepository('PFFUserBundle:User')->findAll();
            $email_in_base = false;
            $username_in_base = false;
            foreach ($users as $u){
                if($u->getEmail() == $email)
                    $email_in_base = true;
            }
            foreach ($users as $us){
                if($us->getUsername() == $username)
                    $username_in_base = true;
            }
            if($password === $repeatPassword and !$email_in_base and !$username_in_base){
               // $encoder = $factory->getEncoder($user);
                $pass=$password;
                //$password = $encoder->encodePassword($password, $user->getSalt());
                $user->setPlainPassword($password);
                $user->setUsername($username);
                $user->setEmail($email);
                $user->setEnabled(true);
                $em->persist($user);
                $em->flush();
                //$this->get('session')->getFlashBag()->add('info', 'Inscription effectuee avec succes votre nom utilisation est'.$username. ' et votre mot de passe est '.$pass);

                return $this->render('PFFBourseBundle:Accueil:detailInscription.html.twig', array('pass' => $pass, 'user'=> $username ));
            }elseif ($email_in_base){
                $this->get('session')->getFlashBag()->add('info', 'Email existant ');
                return $this->render('PFFBourseBundle:Accueil:new.html.twig', array('form' => $form->createView()));
            }
            elseif ($username_in_base){
                $this->get('session')->getFlashBag()->add('info', 'Utilisateur existant');
                return $this->render('PFFBourseBundle:Accueil:new.html.twig', array('form' => $form->createView()));
            }
            else{
                $this->get('session')->getFlashBag()->add('info', 'les mots de passe ne sont pas identiques');
                return $this->render('PFFBourseBundle:Accueil:new.html.twig', array('form' => $form->createView()));
            }
        }
        return $this->render('PFFBourseBundle:Accueil:new.html.twig', array('form' => $form->createView()));
    }
public function detailAction(){
    return $this->render('PFFBourseBundle:Accueil:detailInscription.html.twig');
}
}
