<?php

namespace ExpensesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ExpensesBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('ExpensesBundle:Default:index.html.twig');
    }

    
   

   
    
     public function pokojeAction()
    {
        return $this->render('ExpensesBundle:Default:pokoje.html.twig');
    }
    
     public function restaAction()
    {
        return $this->render('ExpensesBundle:Default:resta.html.twig');
    }

     public function dojazdAction()
    {
        return $this->render('ExpensesBundle:Default:dojazd.html.twig');
    }
    
     public function regulAction()
    {
        return $this->render('ExpensesBundle:Default:regul.html.twig');
    }
   

    
    
    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $firstname = $request->get('firstname');
            $adress = $request->get('adress');
            $telefon = $request->get('telefon');
            $email = $request->get('email');
            $pokoj = $request->get('pokoj');



            $user = new Users();
            $user->setImie($firstname);
            $user->setNazwisko($username);
            $user->setAdres($adress);
            $user->setTelefon($telefon);
            $user->setEmail($email);
            $user->setPokoj($pokoj);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('ExpensesBundle:Default:signup.html.twig');
    }

}
