<?php

namespace Proxies\__CG__\Freelancer\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cv extends \Freelancer\MainBundle\Entity\Cv implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'cvEmail', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'language', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'experience', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'dateModif');
        }

        return array('__isInitialized__', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'cvEmail', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'language', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'experience', '' . "\0" . 'Freelancer\\MainBundle\\Entity\\Cv' . "\0" . 'dateModif');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cv $proxy) {
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
    public function getCvEmail()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getCvEmail();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCvEmail', array());

        return parent::getCvEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($language));

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperience($experience)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperience', array($experience));

        return parent::setExperience($experience);
    }

    /**
     * {@inheritDoc}
     */
    public function getExperience()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperience', array());

        return parent::getExperience();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModif($dateModif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModif', array($dateModif));

        return parent::setDateModif($dateModif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModif', array());

        return parent::getDateModif();
    }

}
