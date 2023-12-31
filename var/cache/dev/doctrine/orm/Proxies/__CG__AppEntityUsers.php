<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'produits', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'supplements', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'promotions', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'domaine', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'tel', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'confirm_password'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'produits', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'supplements', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'promotions', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'domaine', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'tel', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'confirm_password'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isVerified(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVerified', []);

        return parent::isVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVerified(bool $isVerified): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVerified', [$isVerified]);

        return parent::setIsVerified($isVerified);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\App\Entity\Categories $category): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\App\Entity\Categories $category): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', []);

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\App\Entity\Produits $produit): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\App\Entity\Produits $produit): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplements(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupplements', []);

        return parent::getSupplements();
    }

    /**
     * {@inheritDoc}
     */
    public function addSupplement(\App\Entity\Supplements $supplement): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSupplement', [$supplement]);

        return parent::addSupplement($supplement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSupplement(\App\Entity\Supplements $supplement): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSupplement', [$supplement]);

        return parent::removeSupplement($supplement);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotions', []);

        return parent::getPromotions();
    }

    /**
     * {@inheritDoc}
     */
    public function addPromotion(\App\Entity\Promotion $promotion): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPromotion', [$promotion]);

        return parent::addPromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function removePromotion(\App\Entity\Promotion $promotion): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePromotion', [$promotion]);

        return parent::removePromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomaine(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomaine', []);

        return parent::getDomaine();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomaine(string $domaine): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomaine', [$domaine]);

        return parent::setDomaine($domaine);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin(string $cin): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel(int $tel): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmPassword', []);

        return parent::getConfirmPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmPassword(string $confirm_password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmPassword', [$confirm_password]);

        return parent::setConfirmPassword($confirm_password);
    }

}
