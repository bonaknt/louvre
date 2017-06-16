<?php

namespace Tests\MK\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use MK\LouvreBundle\Entity\Reservation;
use MK\LouvreBundle\Form\ReservationType;
use MK\LouvreBundle\Entity\Ticket;
use MK\LouvreBundle\Form\TicketType;
use MK\LouvreBundle\Form\TicketsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class DefaultControllerTest extends WebTestCase
{


    public function testReservation(){

    	$reservation = new Reservation();
    	$reservation->setEmail('bonaknt@gmail.com');
    	$reservation->setDtReservation(new \DateTime('2017/07/22'));
    	$reservation->setTpBillet(1);
    	$reservation->setNbBillet(10);
    	$reservation->setReference('chdgh545dFD');


    	$this->assertContainsOnly('datetime', [$reservation->getDtReservation()]);
        $this->assertContainsOnly('int', [$reservation->getTpBillet(), $reservation->getNbBillet()]);
        $this->assertContainsOnly('string', [$reservation->getEmail(), $reservation->getReference()]);


    }

    public function testTicket()
        {
            $ticket = new Ticket();
            $ticket->setNom('konate');
            $ticket->setPrenom('mohamed');
            $ticket->setDtNaissance(new \DateTime('1995/10/30'));
            $ticket->setNationalite('France');
            $ticket->setTReduit(FALSE);
            $ticket->setTpTarif(2);
            $ticket->setPrix('16');

            $this->assertEquals('konate', $ticket->getNom());
            $this->assertEquals('mohamed', $ticket->getPrenom());
            $this->assertEquals('France', $ticket->getNationalite());
            $this->assertEquals(new \DateTime('1995/10/30'), $ticket->getDtNaissance());
            $this->assertEquals(FALSE, $ticket->getTReduit());
            $this->assertEquals('16', $ticket->getPrix());
        }

    public function testTicketNull()
        {
            $reservation = new Reservation();

     
            $i = 0;
            while ($i != 3){
     
                $ticket = new Ticket();
                $ticket->setReservation($reservation);
                $ticket->setNom('konate');
                $ticket->setPrenom('mohamed');
                $ticket->setDtNaissance('1995/10/30');
                $ticket->setNationalite('France');
                $ticket->setTReduit(FALSE);
                $ticket->setTpTarif(2);
                $ticket->setPrix(12);
                $reservation->getTickets()->add($ticket);
               
     
                $i++;  
            }
     
            $this->assertNotNull($ticket->getReservation());
     


        }

    public function testReservationForm()
        {
            $client = static::createClient();
            $crawler = $client->request('GET', 'http://localhost/louvre/web/app_dev.php/reservation');
            $form = $crawler->selectButton('input[type=submit]')->form();

            
            $form['dtReservation'] = new \DateTime('2017/07/22');
            $form['tpBillet'] = 1;
            $form['nbBillet'] = 2;
            $form['email'] = 'mohamedkonate45@hotmail.fr';


            $crawler = $client->submit($form);
     


        }
}
