<?php

namespace MK\LouvreBundle\CalculTarif;

use MK\LouvreBundle\Entity\Reservation;
use MK\LouvreBundle\Form\ReservationType;
use MK\LouvreBundle\Entity\Ticket;
use MK\LouvreBundle\Form\TicketType;
use MK\LouvreBundle\Form\TicketsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Symfony\component\HttpFoundation\Session\Session;

class MKTarif
{
  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function tarif()
  {
    $tarif = 0;
    $enfant = 1;
    $normal = 2;
    $senior = 3;
    $tarifReduit = 4; 
    $prixEnfant = 8;
    $prixNormal = 16;
    $prixSenior = 12;
    $prixReduit = 10;

    $session = new Session();
    $session->get('tickets');

    $tickets = $session->get('tickets');

    foreach ($tickets as $ticket) {

      $datetime = new \DateTime();
      $dateR = $ticket->getDtNaissance();
      $date = $dateR->diff($datetime);
      $dateFormat = $date->format('%y');
      $difference = intval($dateFormat);

      if ($ticket->getTReduit() == TRUE){
        $tarif = $tarifReduit;
        $ticket->setTpTarif($tarif);
        $ticket->setprix($prixReduit);
      }
      else if ($difference < 12){
        $tarif = $enfant;
        $ticket->setTpTarif($tarif);
        $ticket->setprix($prixEnfant);
      }
      else if ($difference > 11 && $difference < 60){
        $tarif = $normal;

        $ticket->setTpTarif($tarif);
        $ticket->setprix($prixNormal);
      }
      else{
        $tarif = $senior;

        $ticket->setTpTarif($tarif);
        $ticket->setprix($prixSenior);
      }
    }

    return $tarif;

  }
}