<?php

namespace BYD\UserBundle\EventListener;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible for adding the default user role at registration
 */
class RegistrationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $rolesArrPorteur = array('ROLE_POSTER', 'ROLE_USER');
        $rolesArrFreelancer = array('ROLE_FREELANCER', 'ROLE_USER');
        $user = $event->getForm()->getData();
        
        if($user->getChoixRole() == 'freelancer')
        {
            $user->setRoles($rolesArrFreelancer);
        }
        else if($user->getChoixRole() == 'porteur')
        {
            $user->setRoles($rolesArrPorteur);
        }
        else{
            throw new NotFoundHttpException("Erreur Interne");
        }
        
    }
}