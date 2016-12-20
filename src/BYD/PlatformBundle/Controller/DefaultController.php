<?php

namespace BYD\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BYDPlatformBundle:Default:index.html.twig');
    }
}
