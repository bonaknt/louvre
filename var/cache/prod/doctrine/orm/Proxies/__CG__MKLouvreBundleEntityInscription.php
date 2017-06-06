<?php

namespace Proxies\__CG__\MK\LouvreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Inscription extends \MK\LouvreBundle\Entity\Inscription implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'id', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'nom', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'prenom', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'pays', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'dtNaissance', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'dtReservation', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'typeBillet', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'nbBillet', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'tarif', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'typeTarif'];
        }

        return ['__isInitialized__', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'id', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'nom', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'prenom', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'pays', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'dtNaissance', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'dtReservation', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'typeBillet', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'nbBillet', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'tarif', '' . "\0" . 'MK\\LouvreBundle\\Entity\\Inscription' . "\0" . 'typeTarif'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Inscription $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtNaissance($dtNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtNaissance', [$dtNaissance]);

        return parent::setDtNaissance($dtNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtNaissance', []);

        return parent::getDtNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtReservation($dtReservation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtReservation', [$dtReservation]);

        return parent::setDtReservation($dtReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtReservation', []);

        return parent::getDtReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeBillet($typeBillet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeBillet', [$typeBillet]);

        return parent::setTypeBillet($typeBillet);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeBillet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeBillet', []);

        return parent::getTypeBillet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbBillet($nbBillet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbBillet', [$nbBillet]);

        return parent::setNbBillet($nbBillet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbBillet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbBillet', []);

        return parent::getNbBillet();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarif($tarif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarif', [$tarif]);

        return parent::setTarif($tarif);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarif', []);

        return parent::getTarif();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeTarif($typeTarif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeTarif', [$typeTarif]);

        return parent::setTypeTarif($typeTarif);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeTarif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeTarif', []);

        return parent::getTypeTarif();
    }

}
