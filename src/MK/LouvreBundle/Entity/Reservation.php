<?php

namespace MK\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="MK\LouvreBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtReservation", type="datetime")
     */
    private $dtReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="tpBillet", type="integer")
     */
    private $tpBillet;

    /**
     * @var int
     *
     * @ORM\Column(name="nbBillet", type="integer")
     */
    private $nbBillet;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(message = "Ceci n’est pas une adresse email valide")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\OneToMany(targetEntity="Ticket", mappedBy="reservation", cascade={"persist"})
     */
    private $tickets;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dtReservation
     *
     * @param \DateTime $dtReservation
     *
     * @return Reservation
     */
    public function setDtReservation($dtReservation)
    {
        $this->dtReservation = $dtReservation;

        return $this;
    }

    /**
     * Get dtReservation
     *
     * @return \DateTime
     */
    public function getDtReservation()
    {
        return $this->dtReservation;
    }

    /**
     * Set tpBillet
     *
     * @param integer $tpBillet
     *
     * @return Reservation
     */
    public function setTpBillet($tpBillet)
    {
        $this->tpBillet = $tpBillet;

        return $this;
    }

    /**
     * Get tpBillet
     *
     * @return int
     */
    public function getTpBillet()
    {
        return $this->tpBillet;
    }

    /**
     * Set nbBillet
     *
     * @param integer $nbBillet
     *
     * @return Reservation
     */
    public function setNbBillet($nbBillet)
    {
        $this->nbBillet = $nbBillet;

        return $this;
    }

    /**
     * Get nbBillet
     *
     * @return int
     */
    public function getNbBillet()
    {
        return $this->nbBillet;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ticket
     *
     * @param \MK\LouvreBundle\Entity\Ticket $ticket
     *
     * @return Reservation
     */
    public function addTicket(\MK\LouvreBundle\Entity\Ticket $ticket)
    {
        $this->tickets[] = $ticket;

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \MK\LouvreBundle\Entity\Ticket $ticket
     */
    public function removeTicket(\MK\LouvreBundle\Entity\Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Reservation
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}
