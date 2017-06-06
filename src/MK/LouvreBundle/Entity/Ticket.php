<?php

namespace MK\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="MK\LouvreBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtNaissance", type="datetime")
     */
    private $dtNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;

    /**
     * @var bool
     *
     * @ORM\Column(name="tReduit", type="boolean")
     */
    private $tReduit;

    /**
     * @var int
     *
     * @ORM\Column(name="tpTarif", type="integer")
     */
    private $tpTarif;

    /**
     * @ORM\ManyToOne(targetEntity="Reservation", inversedBy="tickets")
     */
    private $reservation;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Ticket
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Ticket
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dtNaissance
     *
     * @param \DateTime $dtNaissance
     *
     * @return Ticket
     */
    public function setDtNaissance($dtNaissance)
    {
        $this->dtNaissance = $dtNaissance;

        return $this;
    }

    /**
     * Get dtNaissance
     *
     * @return \DateTime
     */
    public function getDtNaissance()
    {
        return $this->dtNaissance;
    }

    /**
     * Set tReduit
     *
     * @param boolean $tReduit
     *
     * @return Ticket
     */
    public function setTReduit($tReduit)
    {
        $this->tReduit = $tReduit;

        return $this;
    }

    /**
     * Get tReduit
     *
     * @return bool
     */
    public function getTReduit()
    {
        return $this->tReduit;
    }

    /**
     * Set tpTarif
     *
     * @param integer $tpTarif
     *
     * @return Ticket
     */
    public function setTpTarif($tpTarif)
    {
        $this->tpTarif = $tpTarif;

        return $this;
    }

    /**
     * Get tpTarif
     *
     * @return int
     */
    public function getTpTarif()
    {
        return $this->tpTarif;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Ticket
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set reservation
     *
     * @param \MK\LouvreBundle\Entity\Reservation $reservation
     *
     * @return Ticket
     */
    public function setReservation(\MK\LouvreBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \MK\LouvreBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
