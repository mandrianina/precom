<?php

namespace BYD\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BYD\CoreBundle\Entity\ContactMessage;
use BYD\CoreBundle\Form\ContactMessageType;

class HomeController extends Controller
{
    //Responsable de l'enregistrement des messages envoyés par les internautes
    public function contactMessageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $message = new ContactMessage();
        $form = $this->createForm(ContactMessageType::class, $message);
        
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if($form->isValid())
            {
                $em->persist($message);
                $em->flush();
                
                return $this->render('BYDCoreBundle::index.html.twig');
            }
        }
        return $this->render('BYDCoreBundle:Home:contact_message.html.twig', array('form' => $form->createView()));
    }
    
    
}
