<?php

namespace Proxies\__CG__\Intra\ModuleBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Module extends \Intra\ModuleBundle\Entity\Module implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'id', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'name', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'description', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'activites', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'categorie', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'inscrit', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateDebutInscription', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateFinInscription', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateDebutModule', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateFinModule', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'valeure');
        }

        return array('__isInitialized__', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'id', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'name', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'description', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'activites', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'categorie', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'inscrit', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateDebutInscription', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateFinInscription', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateDebutModule', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'dateFinModule', '' . "\0" . 'Intra\\ModuleBundle\\Entity\\Module' . "\0" . 'valeure');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Module $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
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

    /**
     * {@inheritDoc}
     */
    public function setValeure($valeure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeure', array($valeure));

        return parent::setValeure($valeure);
    }

    /**
     * {@inheritDoc}
     */
    public function getValeure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeure', array());

        return parent::getValeure();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivite(\Intra\ModuleBundle\Entity\Activite $activites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivite', array($activites));

        return parent::addActivite($activites);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivite(\Intra\ModuleBundle\Entity\Activite $activites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivite', array($activites));

        return parent::removeActivite($activites);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivites', array());

        return parent::getActivites();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutInscription($dateDebutInscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutInscription', array($dateDebutInscription));

        return parent::setDateDebutInscription($dateDebutInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutInscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutInscription', array());

        return parent::getDateDebutInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinInscription($dateFinInscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinInscription', array($dateFinInscription));

        return parent::setDateFinInscription($dateFinInscription);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinInscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinInscription', array());

        return parent::getDateFinInscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutModule($dateDebutModule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutModule', array($dateDebutModule));

        return parent::setDateDebutModule($dateDebutModule);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutModule', array());

        return parent::getDateDebutModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinModule($dateFinModule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinModule', array($dateFinModule));

        return parent::setDateFinModule($dateFinModule);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinModule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinModule', array());

        return parent::getDateFinModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Intra\ForumBundle\Entity\Categorie $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function addInscrit(\Intra\UserBundle\Entity\User $inscrit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInscrit', array($inscrit));

        return parent::addInscrit($inscrit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInscrit(\Intra\UserBundle\Entity\User $inscrit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInscrit', array($inscrit));

        return parent::removeInscrit($inscrit);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscrit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscrit', array());

        return parent::getInscrit();
    }

}
