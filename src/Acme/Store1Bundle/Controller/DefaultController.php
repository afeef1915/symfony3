<?php

namespace Acme\Store1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeStore1Bundle:Default:index.html.twig');
    }
}
