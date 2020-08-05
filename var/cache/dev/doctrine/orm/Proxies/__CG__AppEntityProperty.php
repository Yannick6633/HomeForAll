<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Property extends \App\Entity\Property implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'attachments', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'pieces', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'etages', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'chauffage', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'code_postal', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'vendu', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'criteres', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'attachments', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'surface', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'pieces', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'chambres', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'etages', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'chauffage', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'code_postal', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'vendu', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'criteres', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Property' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Property $proxy) {
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
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurface(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurface', []);

        return parent::getSurface();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurface(int $surface): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurface', [$surface]);

        return parent::setSurface($surface);
    }

    /**
     * {@inheritDoc}
     */
    public function getPieces(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPieces', []);

        return parent::getPieces();
    }

    /**
     * {@inheritDoc}
     */
    public function setPieces(int $pieces): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPieces', [$pieces]);

        return parent::setPieces($pieces);
    }

    /**
     * {@inheritDoc}
     */
    public function getChambres(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChambres', []);

        return parent::getChambres();
    }

    /**
     * {@inheritDoc}
     */
    public function setChambres(int $chambres): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChambres', [$chambres]);

        return parent::setChambres($chambres);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtages(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtages', []);

        return parent::getEtages();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtages(string $etages): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtages', [$etages]);

        return parent::setEtages($etages);
    }

    /**
     * {@inheritDoc}
     */
    public function getChauffage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChauffage', []);

        return parent::getChauffage();
    }

    /**
     * {@inheritDoc}
     */
    public function setChauffage(string $chauffage): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChauffage', [$chauffage]);

        return parent::setChauffage($chauffage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(int $prix): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedPrix(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedPrix', []);

        return parent::getFormattedPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodePostal(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodePostal', []);

        return parent::getCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodePostal(int $code_postal): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodePostal', [$code_postal]);

        return parent::setCodePostal($code_postal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendu(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendu', []);

        return parent::getVendu();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendu(bool $vendu): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendu', [$vendu]);

        return parent::setVendu($vendu);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getCriteres(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCriteres', []);

        return parent::getCriteres();
    }

    /**
     * {@inheritDoc}
     */
    public function addCritere(\App\Entity\Critere $critere): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCritere', [$critere]);

        return parent::addCritere($critere);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCritere(\App\Entity\Critere $critere): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCritere', [$critere]);

        return parent::removeCritere($critere);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName(?string $imageName): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageName]);

        return parent::setImageFile($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachments', []);

        return parent::getAttachments();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachment(): ?\App\Entity\Attachment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachment', []);

        return parent::getAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function addAttachment(\App\Entity\Attachment $attachment): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttachment', [$attachment]);

        return parent::addAttachment($attachment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttachment(\App\Entity\Attachment $attachment): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttachment', [$attachment]);

        return parent::removeAttachment($attachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Property
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}
