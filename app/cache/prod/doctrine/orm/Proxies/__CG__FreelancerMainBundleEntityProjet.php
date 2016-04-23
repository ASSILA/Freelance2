<?php

namespace Proxies\__CG__\Freelancer\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Projet extends \Freelancer\MainBundle\Entity\Projet implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'id', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'email', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'nom', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'budget', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'checkIn', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'checkOut', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'satus', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'emailfreelancer', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'description');
        }

        return array('__isInitialized__', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'id', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'email', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'nom', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'budget', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'checkIn', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'checkOut', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'satus', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'emailfreelancer', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Projet' . "\0" . 'description');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Projet $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setBudget($budget)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBudget', array($budget));

        return parent::setBudget($budget);
    }

    /**
     * {@inheritDoc}
     */
    public function getBudget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBudget', array());

        return parent::getBudget();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckIn($checkIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckIn', array($checkIn));

        return parent::setCheckIn($checkIn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckIn', array());

        return parent::getCheckIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckOut($checkOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckOut', array($checkOut));

        return parent::setCheckOut($checkOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckOut', array());

        return parent::getCheckOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setSatus($satus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSatus', array($satus));

        return parent::setSatus($satus);
    }

    /**
     * {@inheritDoc}
     */
    public function getSatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSatus', array());

        return parent::getSatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailfreelancer($emailfreelancer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailfreelancer', array($emailfreelancer));

        return parent::setEmailfreelancer($emailfreelancer);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailfreelancer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailfreelancer', array());

        return parent::getEmailfreelancer();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

}
