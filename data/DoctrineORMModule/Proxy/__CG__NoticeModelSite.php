<?php

namespace DoctrineORMModule\Proxy\__CG__\Notice\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \Notice\Model\Site implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array('siteName' => NULL, 'country' => NULL, 'province' => NULL, 'district' => NULL, 'city' => NULL, 'quarter' => NULL, 'street' => NULL, 'locationIdOtodom' => NULL, 'categoryIdOtodom' => NULL, 'roofMaterial' => NULL, 'buildingMaterial' => NULL, 'constructionYear' => NULL, 'buildingOwnership' => NULL, 'numberOfFloors' => NULL, 'heatings' => NULL, 'medias' => NULL, 'securities' => NULL, 'fences' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->siteName, $this->country, $this->province, $this->district, $this->city, $this->quarter, $this->street, $this->locationIdOtodom, $this->categoryIdOtodom, $this->roofMaterial, $this->buildingMaterial, $this->constructionYear, $this->buildingOwnership, $this->numberOfFloors, $this->heatings, $this->medias, $this->securities, $this->fences);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'inputFilter', 'id', 'siteName', 'country', 'province', 'district', 'city', 'quarter', 'street', 'locationIdOtodom', 'categoryIdOtodom', 'roofMaterial', 'buildingMaterial', 'constructionYear', 'buildingOwnership', 'numberOfFloors', 'heatings', 'medias', 'securities', 'fences');
        }

        return array('__isInitialized__', 'inputFilter', 'id');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->siteName, $this->country, $this->province, $this->district, $this->city, $this->quarter, $this->street, $this->locationIdOtodom, $this->categoryIdOtodom, $this->roofMaterial, $this->buildingMaterial, $this->constructionYear, $this->buildingOwnership, $this->numberOfFloors, $this->heatings, $this->medias, $this->securities, $this->fences);
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
    public function addHeatings(\Doctrine\Common\Collections\Collection $heatings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHeatings', array($heatings));

        return parent::addHeatings($heatings);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHeatings(\Doctrine\Common\Collections\ArrayCollection $heatings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHeatings', array($heatings));

        return parent::removeHeatings($heatings);
    }

    /**
     * {@inheritDoc}
     */
    public function addMedias(\Doctrine\Common\Collections\Collection $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMedias', array($medias));

        return parent::addMedias($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMedias(\Doctrine\Common\Collections\Collection $medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMedias', array($medias));

        return parent::removeMedias($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function addSecurities(\Doctrine\Common\Collections\Collection $securities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSecurities', array($securities));

        return parent::addSecurities($securities);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSecurities(\Doctrine\Common\Collections\Collection $securities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSecurities', array($securities));

        return parent::removeSecurities($securities);
    }

    /**
     * {@inheritDoc}
     */
    public function addFences(\Doctrine\Common\Collections\Collection $fences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFences', array($fences));

        return parent::addFences($fences);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFences(\Doctrine\Common\Collections\Collection $fences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFences', array($fences));

        return parent::removeFences($fences);
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvince()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvince', array());

        return parent::getProvince();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvince($province)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvince', array($province));

        return parent::setProvince($province);
    }

    /**
     * {@inheritDoc}
     */
    public function getDistrict()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistrict', array());

        return parent::getDistrict();
    }

    /**
     * {@inheritDoc}
     */
    public function setDistrict($district)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDistrict', array($district));

        return parent::setDistrict($district);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuarter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuarter', array());

        return parent::getQuarter();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuarter($quarter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuarter', array($quarter));

        return parent::setQuarter($quarter);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteName', array());

        return parent::getSiteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteName($siteName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteName', array($siteName));

        return parent::setSiteName($siteName);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', array());

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', array($street));

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationIdOtodom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationIdOtodom', array());

        return parent::getLocationIdOtodom();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationIdOtodom($locationIdOtodom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationIdOtodom', array($locationIdOtodom));

        return parent::setLocationIdOtodom($locationIdOtodom);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoofMaterial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoofMaterial', array());

        return parent::getRoofMaterial();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoofMaterial($roofMaterial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoofMaterial', array($roofMaterial));

        return parent::setRoofMaterial($roofMaterial);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuildingMaterial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuildingMaterial', array());

        return parent::getBuildingMaterial();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuildingMaterial($buildingMaterial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuildingMaterial', array($buildingMaterial));

        return parent::setBuildingMaterial($buildingMaterial);
    }

    /**
     * {@inheritDoc}
     */
    public function getConstructionYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConstructionYear', array());

        return parent::getConstructionYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setConstructionYear($constructionYear)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConstructionYear', array($constructionYear));

        return parent::setConstructionYear($constructionYear);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfFloors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfFloors', array());

        return parent::getNumberOfFloors();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfFloors($numberOfFloors)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfFloors', array($numberOfFloors));

        return parent::setNumberOfFloors($numberOfFloors);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeating()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeating', array());

        return parent::getHeating();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeating($heating)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeating', array($heating));

        return parent::setHeating($heating);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedias', array());

        return parent::getMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedias($medias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedias', array($medias));

        return parent::setMedias($medias);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecurities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecurities', array());

        return parent::getSecurities();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecurities($securities)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecurities', array($securities));

        return parent::setSecurities($securities);
    }

    /**
     * {@inheritDoc}
     */
    public function getFence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFence', array());

        return parent::getFence();
    }

    /**
     * {@inheritDoc}
     */
    public function setFence($fence)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFence', array($fence));

        return parent::setFence($fence);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryIdOtodom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryIdOtodom', array());

        return parent::getCategoryIdOtodom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryIdOtodom($categoryIdOtodom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryIdOtodom', array($categoryIdOtodom));

        return parent::setCategoryIdOtodom($categoryIdOtodom);
    }

    /**
     * {@inheritDoc}
     */
    public function getBuildingOwnership()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuildingOwnership', array());

        return parent::getBuildingOwnership();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuildingOwnership($buildingOwnership)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuildingOwnership', array($buildingOwnership));

        return parent::setBuildingOwnership($buildingOwnership);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeatings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeatings', array());

        return parent::getHeatings();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeatings($heatings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeatings', array($heatings));

        return parent::setHeatings($heatings);
    }

    /**
     * {@inheritDoc}
     */
    public function getFences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFences', array());

        return parent::getFences();
    }

    /**
     * {@inheritDoc}
     */
    public function setFences($fences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFences', array($fences));

        return parent::setFences($fences);
    }

}
