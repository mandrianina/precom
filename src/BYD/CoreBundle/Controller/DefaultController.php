<?php

namespace BYD\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BYDCoreBundle::index.html.twig');
    }
}
