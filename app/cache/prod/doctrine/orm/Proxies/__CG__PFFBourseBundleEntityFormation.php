<?php

namespace Proxies\__CG__\PFF\BourseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \PFF\BourseBundle\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'Beneficiaire', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'diplome', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'dateDebut', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'dateFin', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'montF', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'lieuF', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'specialite'];
        }

        return ['__isInitialized__', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'Beneficiaire', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'diplome', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'dateDebut', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'dateFin', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'montF', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'lieuF', '' . "\0" . 'PFF\\BourseBundle\\Entity\\Formation' . "\0" . 'specialite'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
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
    public function setDiplome($diplome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiplome', [$diplome]);

        return parent::setDiplome($diplome);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiplome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiplome', []);

        return parent::getDiplome();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$dateDebut]);

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin($dateFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$dateFin]);

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontF($montF)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontF', [$montF]);

        return parent::setMontF($montF);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontF()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontF', []);

        return parent::getMontF();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuF($lieuF)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuF', [$lieuF]);

        return parent::setLieuF($lieuF);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuF()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuF', []);

        return parent::getLieuF();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialite($specialite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialite', [$specialite]);

        return parent::setSpecialite($specialite);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialite', []);

        return parent::getSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setBeneficiaire(\PFF\BourseBundle\Entity\Beneficiaire $beneficiaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBeneficiaire', [$beneficiaire]);

        return parent::setBeneficiaire($beneficiaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getBeneficiaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBeneficiaire', []);

        return parent::getBeneficiaire();
    }

}