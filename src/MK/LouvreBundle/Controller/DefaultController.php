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
    public function reservationAction(Request $request)
    {

	    $reservation = new Reservation();
	    $form = $this->get('form.factory')->create(ReservationType::class, $reservation);
	      		
	    $form->handleRequest($request);
	    if ($form->isSubmitted() && $form->isValid()) {
	    	$em 			= $this->getDoctrine()->getManager();
	    	$redirection    = $this->redirectToRoute('mk_louvre_reservation');

			//appel du service billet pour bloquer les reservations billet journée de la date du jour après 14h, service limitation nombre de billet et service reference
			$blocageBillet = $this->container->get('mk_louvre.billet');
			$limite = $this->container->get('mk_louvre.limit');
	    	$reference = $this->container->get('mk_louvre.reference');

	    	//appel de la session
			$session = new Session();

			//insertion élément en session
			$session->set('nbBillet', $reservation->getNbBillet());

			//Service limitation de billet;
			$session->set('dateReservation', $reservation->getDtReservation());
			$session->set('typeBillet', $reservation->getTpBillet());
			//condition pour limitation nombre de billet
			if (!$limite->limit($em, $redirection)){
				//condition pour bloquer les reservations de la date du jour après 14h
				if (!$blocageBillet->billet($redirection)){

					$session->set('email', $reservation->getEmail());
					$session->set('reference', $reference->generateur());
					return $this->redirectToRoute('mk_louvre_ticket');
					
				}
			}	 
	    }
        return $this->render('MKLouvreBundle:Default:reservation.html.twig', array(
	      'form' => $form->createView(),    
	    ));
    }


    public function ticketAction(Request $request)
    {
    	//appel de l'entité de reservation
	    $reservation = new Reservation();

	    //appel de la session
	    $session = new Session();

    	$i = 0;

    	//boucle pour le nombre de formulaire que le nombre de billet demandé
	    while ($i != $session->get('nbBillet')){
	    	$ticket = new Ticket();
	    	$ticket->setReservation($reservation);

		    $ticket->setTpTarif(0);
	    	$reservation->getTickets()->add($ticket);
	    	
	    	$i++;    
	    }

	    $reservation->setDtReservation($session->get('dateReservation'));
	    $reservation->setEmail($session->get('email'));
	        	
	    $form   = $this->get('form.factory')->create(TicketsType::class, $reservation);
 
	    $tickets = $reservation->getTickets();

	    $form->handleRequest($request);
	    if ($form->isSubmitted() && $form->isValid()) {
	    	$session = new Session();
	      	$session->set('tickets', $tickets);
	      	$redirection    = $this->redirectToRoute('mk_louvre_ticket');
			
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

	    //Service calcul du tarif des personnes
	    $calculTarif = $this->container->get('mk_louvre.tarif');

	    $calculTarif->tarif();

	    //Boucle pour récupérer le prix total

	    $prix = 0;
	    foreach ($session->get('tickets') as $tickets) {
	    	$tickets->getPrix();
	    	$prix += $tickets->getPrix();
	    }

	    $session->set('prix', $prix);

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
    	$em = $this->getDoctrine()->getManager();
    	$reservation = new Reservation();
    	$session = new Session();

    	$prix = $session->get('prix');

        if ($request->isMethod('POST')) {
            $token = $request->request->get('stripeToken');

            //insertion des informations en BDD
            $reservation->setDtReservation($session->get('dateReservation'));
            $reservation->setTpBillet($session->get('typeBillet'));
            $reservation->setNbBillet($session->get('nbBillet'));
            $reservation->setEmail($session->get('email'));
            $reservation->setReference($session->get('reference'));
            
            foreach ($session->get('tickets') as $value) {
            	$ticket = new Ticket();
            	$ticket->setNom($value->getNom());
            	$ticket->setPrenom($value->getPrenom());
            	$ticket->setDtNaissance($value->getDtNaissance());
            	$ticket->setTReduit($value->getTReduit());
            	$ticket->setTpTarif($value->getTpTarif());
            	$ticket->setNationalite($value->getNationalite());
            	$ticket->setPrix($value->getPrix());
            	$ticket->setReservation($reservation);

            	$em->persist($ticket);
            }
            $em->persist($reservation);
            $em->flush();

            //Boucle pour récupérer le prix total

            $prixTotal = 0;
           	foreach ($session->get('tickets') as $tickets) {
		    	$tickets->getPrix();
		    	$prixTotal += $tickets->getPrix();
		    }

		    $session->set('prixTotal', $prixTotal);

		    $mailer = $this->get('mailer');
		    $mailBodyHTML = $this->render('MKLouvreBundle:Default:email.html.twig', [
	        'email'               =>     $session->get('email'),
	        'date_reservation'    =>     $session->get('dateReservation'),
	        'type_billet'         =>     $session->get('typeBillet'),
	        'nombre_billet'       =>     $session->get('nbBillet'),
	        'reference'           =>     $session->get('reference'),
	        'nom'                 =>     $session->get('tickets'),
	        'total'               =>     $session->get('prixTotal'),
	        ])->getContent();

		    $email = $this->container->get('mk_louvre.email');
		    $email->sendEmail($mailBodyHTML, $mailer);

            \Stripe\Stripe::setApiKey("sk_test_3Rhg0Hiy8Gw3VMaOIrrbE4cE");
            \Stripe\Charge::create(array(
              "amount" => $prix * 100,
              "currency" => "eur",
              "source" => $token,
              "description" => "Billet de reservation",
              ));

            $session->getFlashBag()->add('success', 'Paiement accépté !');
            $session->clear();
            return $this->redirectToRoute('mk_louvre_reservation');
        }

        return $this->render('MKLouvreBundle:Default:paiement.html.twig', array(
	      'prix'			=>			$prix,

	      
	    ));
    }
}
