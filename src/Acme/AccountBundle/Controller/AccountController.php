<?php

// src/Acme/AccountBundle/Controller/AccountController.php

namespace Acme\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Acme\AccountBundle\Form\Type\RegistrationType;
use Acme\AccountBundle\Form\Model\Registration;

class AccountController extends Controller {

    public function registerAction() {

        $form = $this->createForm(RegistrationType::class, new Registration());

        return $this->render('AcmeAccountBundle:Account:register.html.twig', array('form' => $form->createView()));
    }

    public function createAction(Request $request) {
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        // $form = $this->createForm(new RegistrationType(), new Registration());
        $form = $this->createForm(RegistrationType::class, new Registration());
     
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $registration = $form->getData();
           
            $dm->persist($registration->getUser());
            $dm->flush();
//        if ($form->isValid()) {
//            $registration = $form->getData();
//             
//            $dm->persist($registration->getUser());
//            $dm->flush();
           die("data saved successfully");
            return $this->redirect('homepage');
            
            //return $this->redirect('homepage');
        }
        

        return $this->render('AcmeAccountBundle:Account:register.html.twig', array('form' => $form->createView()));
    }

}
