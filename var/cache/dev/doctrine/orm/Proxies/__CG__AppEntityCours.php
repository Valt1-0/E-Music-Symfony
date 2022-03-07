<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cours extends \App\Entity\Cours implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'ageMini', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'ageMaxi', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'nbPlaceMaxi', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'couter', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'jour', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'inscription', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'professeur', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'typeInstrument'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'libelle', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'ageMini', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'ageMaxi', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'nbPlaceMaxi', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'couter', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'jour', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'inscription', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'professeur', '' . "\0" . 'App\\Entity\\Cours' . "\0" . 'typeInstrument'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cours $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getLibelle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', []);

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle(string $libelle): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', [$libelle]);

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMini(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMini', []);

        return parent::getAgeMini();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMini(int $ageMini): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMini', [$ageMini]);

        return parent::setAgeMini($ageMini);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMaxi(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMaxi', []);

        return parent::getAgeMaxi();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMaxi(int $ageMaxi): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMaxi', [$ageMaxi]);

        return parent::setAgeMaxi($ageMaxi);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbPlaceMaxi(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbPlaceMaxi', []);

        return parent::getNbPlaceMaxi();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbPlaceMaxi(int $nbPlaceMaxi): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbPlaceMaxi', [$nbPlaceMaxi]);

        return parent::setNbPlaceMaxi($nbPlaceMaxi);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouter(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouter', []);

        return parent::getCouter();
    }

    /**
     * {@inheritDoc}
     */
    public function addCouter(\App\Entity\Couter $couter): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCouter', [$couter]);

        return parent::addCouter($couter);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCouter(\App\Entity\Couter $couter): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCouter', [$couter]);

        return parent::removeCouter($couter);
    }

    /**
     * {@inheritDoc}
     */
    public function getJour(): ?\App\Entity\Jour
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJour', []);

        return parent::getJour();
    }

    /**
     * {@inheritDoc}
     */
    public function setJour(?\App\Entity\Jour $jour): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJour', [$jour]);

        return parent::setJour($jour);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscription(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscription', []);

        return parent::getInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function addInscription(\App\Entity\Inscription $inscription): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInscription', [$inscription]);

        return parent::addInscription($inscription);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInscription(\App\Entity\Inscription $inscription): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInscription', [$inscription]);

        return parent::removeInscription($inscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesseur(): ?\App\Entity\Professeur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesseur', []);

        return parent::getProfesseur();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesseur(?\App\Entity\Professeur $professeur): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesseur', [$professeur]);

        return parent::setProfesseur($professeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeInstrument(): ?\App\Entity\TypeInstrument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeInstrument', []);

        return parent::getTypeInstrument();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeInstrument(?\App\Entity\TypeInstrument $typeInstrument): \App\Entity\Cours
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeInstrument', [$typeInstrument]);

        return parent::setTypeInstrument($typeInstrument);
    }

}