<?php

namespace MK\LouvreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


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
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre nom doit au moins avoir une lougueur de 2 caractères",
     *      maxMessage = "Votre nm ne peut pas avoir plus de 50 caractères"
     * )
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre prénom doit au moins avoir une lougueur de 2 caractères",
     *      maxMessage = "Votre prénom ne peut pas avoir plus de 50 caractères"
     * )
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtNaissance", type="datetime")
     * @Assert\NotBlank(message="Ce champ ne peux pas être vide")
     * @Assert\Date(message="Date non valide")
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
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

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

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Ticket
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
