<?php

namespace MK\LouvreBundle\Controller;

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


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MKLouvreBundle:Default:index.html.twig');
    }

    public function reservationAction(Request $request)
    {

	    $reservation = new Reservation();


	    $form = $this->get('form.factory')->create(ReservationType::class, $reservation);
	      		

	    $form->handleRequest($request);

	    if ($form->isSubmitted() && $form->isValid()) {

	      $reference = $this->container->get('mk_louvre.reference');
	      $session = new Session();

	      $session->set('dateReservation', $reservation->getDtReservation());
	      $session->set('typeBillet', $reservation->getTpBillet());

	      $datetime = new \DateTime();

	      $blocageBillet = $this->container->get('mk_louvre.billet');

	      $jour = $session->get('dateReservation')->format('j');
	      $mois = $session->get('dateReservation')->format('m');
	      $annee = $session->get('dateReservation')->format('Y');

	      if ($blocageBillet->billet($jour, $mois, $annee) == 1){
	      	$session->clear();
	      	$session->getFlashBag()->add('errors', 'Erreur billet journée !');
	      	return $this->redirectToRoute('mk_louvre_inscription');
	      }
	      else{
	      	$session->set('email', $reservation->getEmail());
			$session->set('nbBillet', $reservation->getNbBillet());
			$session->set('reference', $reference->generateur());

			return $this->redirectToRoute('mk_louvre_ticket');

	      }      
	    }

        return $this->render('MKLouvreBundle:Default:reservation.html.twig', array(
	      'form' => $form->createView(),
	      
	    ));
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function ticketAction(Request $request)
    {

	    $reservation = new Reservation();

	    $session = new Session();


    	$i = 0;

	    while ($i != $session->get('nbBillet')){
	    	$ticket = new Ticket();
	    	$ticket->setReservation($reservation);

		    $ticket->setTpTarif(0);
	    	$reservation->getTickets()->add($ticket);
	    	

	    	$i++;    
	    }
	        	

	    $form   = $this->get('form.factory')->create(TicketsType::class, $reservation);
 

	    $tickets = $reservation->getTickets();
	    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

	      $session = new Session();
	      $session->set('tickets', $tickets);

	      return $this->redirectToRoute('mk_louvre_recapitulatif');
	    }

        return $this->render('MKLouvreBundle:Default:ticket.html.twig', array(
	      'form' => $form->createView(),
	      
	    ));
    }


    public function recapitulatifAction(Request $request)
    {

	    $reservation = new Reservation();

	    $ticket = new Ticket();

	    $session = new Session();

	    $calculTarif = $this->container->get('mk_louvre.tarif');

	    $calculTarif->tarif();
	    $prix = 0;
	    foreach ($session->get('tickets') as $tickets) {
	    	$tickets->getPrix();
	    	$prix += $tickets->getPrix();
	    }

        return $this->render('MKLouvreBundle:Default:recapitulatif.html.twig', array(
	      'email' => 					$session->get('email'),
	      'date_reservation' => 		$session->get('dateReservation'),
	      'type_billet'		 =>			$session->get('typeBillet'),
	      'nombre_billet'	 =>			$session->get('nbBillet'),
	      'reference'		 =>			$session->get('reference'),
	      'nom'				 =>			$session->get('tickets'),
	      'total'			 =>			$prix,

	      
	    ));
    }

    public function paiementAction(Request $request)
    {

        return $this->render('MKLouvreBundle:Default:paiement.html.twig');
    }


    public function redirection()
    {
	    return $this->redirectToRoute('mk_louvre_inscription');
    }
}
