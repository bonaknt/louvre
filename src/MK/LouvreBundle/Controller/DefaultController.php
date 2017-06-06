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
	    /*$i = 0;
	    while ($i != 2){
	    	$ticket1 = new Ticket();
	    	$i++;    	
	    }*/

	    $form   = $this->get('form.factory')->create(ReservationType::class, $reservation);
	      		



	    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
	      /*$em = $this->getDoctrine()->getManager();

	      $em->persist($reservation);
	      $em->flush();*/
	      $reference = $this->container->get('mk_louvre.reference');
	      $session = new Session();
	      $session->set('email', $reservation->getEmail());
	      $session->set('dateReservation', $reservation->getDtReservation());
	      $session->set('typeBillet', $reservation->getTpBillet());
	      $session->set('nbBillet', $reservation->getNbBillet());
	      $session->set('reference', $reference->generateur());

	      return $this->redirectToRoute('mk_louvre_ticket');
	    }

        return $this->render('MKLouvreBundle:Default:reservation.html.twig', array(
	      'form' => $form->createView(),
	      
	    ));
    }

    public function ticketAction(Request $request)
    {

	    $reservation = new Reservation();

	    $session = new Session();

	   	//$ticket = new Ticket();
    	//$reservation->getTickets()->add($ticket);

    	$i = 0;
    	$enfant = 1;
    	$normal = 2;
    	$senior = 3;


	    while ($i != $session->get('nbBillet')){
	    	$ticket = new Ticket();
	    	$ticket->setReservation($reservation);


/*
	    	$datetime = new \DateTime();
		    $dateR = $ticket->getDtNaissance();
		    //dump($dateR); die();
		    $date = $dateR->diff($datetime);
		    $dd = $date->format('%y');
		    $difference = intval($dd);

		    if ($difference < 13){
		    	$ticket->setTpTarif($enfant);
		    }
		    else if ($difference > 12 && $difference < 60){
		    	$ticket->setTpTarif($normal);
		    }
		    else{
		    	$ticket->setTpTarif($senior);
		    }
*/
		    $ticket->setTpTarif($enfant);
	    	$reservation->getTickets()->add($ticket);
	    	

	    	$i++;    
	    }
	        	

	    $form   = $this->get('form.factory')->create(TicketsType::class, $reservation);
  
	    $reservation->setEmail($session->get('email'));
	    $reservation->setDtReservation($session->get('dateReservation'));
	    $reservation->setTpBillet($session->get('typeBillet'));
	    $reservation->setNbBillet($session->get('nbBillet'));
	    $reservation->setReference($session->get('reference'));



	    


	    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($ticket);
	      $em->persist($reservation);
	      $em->flush();

	      $session->clear();

	      return $this->redirectToRoute('mk_louvre_homepage');
	    }

        return $this->render('MKLouvreBundle:Default:ticket.html.twig', array(
	      'form' => $form->createView(),
	      
	    ));
    }
}
