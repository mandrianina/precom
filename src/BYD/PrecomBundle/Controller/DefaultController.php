<?php

namespace BYD\PrecomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        
        return $this->render('BYDPrecomBundle::index.html.twig');
    }
}
