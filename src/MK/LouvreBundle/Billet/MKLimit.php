<?php

namespace MK\LouvreBundle\Billet;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use MK\LouvreBundle\Controller\DefaultController;
use Symfony\component\HttpFoundation\Session\Session;

class MKLimit
{

  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function limit($em)
  {

    $session = new Session();

    //repository de réservation
    $repository = $em->getRepository('MKLouvreBundle:Reservation');


    $limitation = $repository->limitationReservation($session->get('dateReservation'));

    //boucle pour limiter le nombre de billet par rapport au nombre de billet pour la date
    foreach ($limitation as $key => $limit) {
      
      foreach ($limit as $key => $lim) {
        
        $lim = intval($lim);
        
        $lim1 = $lim + $session->get('nbBillet');
        if ($lim1 > 5){
          return 1;
        }
        else{
          return 0;
        }
      }
    }

  }
}