<?php

namespace Proxies\__CG__\Intra\ForumBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Thread extends \Intra\ForumBundle\Entity\Thread implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'id', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'sujet', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'auteur', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'categorie', 'commentaires', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'dateCreation', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'dateActivite');
        }

        return array('__isInitialized__', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'id', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'sujet', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'auteur', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'categorie', 'commentaires', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'dateCreation', '' . "\0" . 'Intra\\ForumBundle\\Entity\\Thread' . "\0" . 'dateActivite');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Thread $proxy) {
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
    public function setSujet($sujet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSujet', array($sujet));

        return parent::setSujet($sujet);
    }

    /**
     * {@inheritDoc}
     */
    public function getSujet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSujet', array());

        return parent::getSujet();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur(\Intra\UserBundle\Entity\User $auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', array($auteur));

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', array());

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateActivite($dateActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateActivite', array($dateActivite));

        return parent::setDateActivite($dateActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateActivite', array());

        return parent::getDateActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\Intra\ForumBundle\Entity\Categorie $categorie)
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
    public function addCommentaire(\Intra\ForumBundle\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', array($commentaire));

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\Intra\ForumBundle\Entity\Commentaire $commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', array($commentaire));

        return parent::removeCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', array());

        return parent::getCommentaires();
    }

}
