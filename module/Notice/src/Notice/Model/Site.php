<?php

namespace Notice\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;


/**
 * Class site
 * @ORM\Entity
 * @package Notice\Model
 */
class Site
{
    protected $inputFilter;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="text")
     */
    public $siteName;

    /**
     * @ORM\ManyToOne(targetEntity="country")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    public $country;

    /**
     * @ORM\ManyToOne(targetEntity="province")
     * @ORM\JoinColumn(name="province", referencedColumnName="id")
     */
    public $province;

    /**
     * @ORM\ManyToOne(targetEntity="district")
     * @ORM\JoinColumn(name="district", referencedColumnName="id")
     */
    public $district;

    /**
     * @ORM\Column(type="text")
     */
    public $city;

    /**
     * @ORM\Column(type="text")
     */
    public $quarter;

    /**
     * @ORM\Column(type="text")
     */
    public $street;

    /**
     * @ORM\ManyToOne(targetEntity="locationOtodom")
     * @ORM\JoinColumn(name="locationOtodom", referencedColumnName="id")
     */
    public $locationIdOtodom;

    /**
     * @ORM\ManyToOne(targetEntity="categoryOtodom")
     * @ORM\JoinColumn(name="categoryOtodom",referencedColumnName="id")
     */
    public $categoryIdOtodom;

    /**
     * @ORM\Column(type="text")
     */
    public $roofMaterial;

    /**
     * @ORM\ManyToOne(targetEntity="buildingMaterial")
     * @ORM\JoinColumn(name="buildingMaterial", referencedColumnName="id")
     */
    public $buildingMaterial;

    /**
     * @ORM\Column(type="integer")
     */
    public $constructionYear;

    /**
     * @ORM\ManyToOne(targetEntity="buildingOwnership")
     * @ORM\JoinColumn(name="buildingOwnership", referencedColumnName="id")
     */
    public $buildingOwnership;

    /**
     * @ORM\ManyToOne(targetEntity="floor")
     * @ORM\JoinColumn(name="numberOfFloors", referencedColumnName="id")
     */
    public $numberOfFloors;

    /**
     * @ORM\ManyToMany(targetEntity="heating")
     * @ORM\JoinTable(name="sites_heatings",
     *     joinColumns={@ORM\JoinColumn(name="site_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="heating_id", referencedColumnName="id")}
     *     )
     */
    public $heatings;

    /**
     * @ORM\ManyToMany(targetEntity="medium")
     * @ORM\JoinTable(name="sites_medias",
     *     joinColumns={@ORM\JoinColumn(name="site_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="media_id", referencedColumnName="id")}
     *     )
     */
    public $medias;

    /**
     * @ORM\ManyToMany(targetEntity="security")
     * @ORM\JoinTable(name="sites_securities",
     *      joinColumns={@ORM\JoinColumn(name="site_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="security_id", referencedColumnName="id")}
     *  )
     */
    public $securities;

    /**
     * @ORM\ManyToMany(targetEntity="fence")
     * @ORM\JoinTable(name="sites_fences",
     *      joinColumns={@ORM\JoinColumn(name="site_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fence_id", referencedColumnName="id")}
     *     )
     */
    public $fences;

    public function addHeatings(Collection $heatings){
        foreach($heatings as $heating){
            $this->heatings->add($heating);
        }
    }

    public function removeHeatings(ArrayCollection $heatings){
        foreach($heatings as $heating){
            $this->heatings->removeElement($heating);
        }
    }

    public function addMedias(Collection $medias){
        foreach($medias as $medium){
            $this->medias->add($medium);
        }
    }

    public function removeMedias(Collection $medias){
        foreach($medias as $medium){
            $this->extras->removeElement($medium);
        }
    }

    public function addSecurities(Collection $securities){
        foreach($securities as $security){
            $this->securities->add($security);
        }
    }

    public function removeSecurities(Collection $securities){
        foreach($securities as $security){
            $this->securities->removeElement($security);
        }
    }

    public function addFences(Collection $fences){
        foreach($fences as $fence){
            $this->fences->add($fence);
        }
    }

    public function removeFences(Collection $fences){
        foreach($fences as $fence){
            $this->fences->removeElement($fence);
        }
    }

    public function __construct()
    {
        $this->securities = new ArrayCollection();
        $this->medias = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @param mixed $quarter
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;
    }

    /**
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param mixed $siteName
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getLocationIdOtodom()
    {
        return $this->locationIdOtodom;
    }

    /**
     * @param mixed $locationIdOtodom
     */
    public function setLocationIdOtodom($locationIdOtodom)
    {
        $this->locationIdOtodom = $locationIdOtodom;
    }

    /**
     * @return mixed
     */
    public function getRoofMaterial()
    {
        return $this->roofMaterial;
    }

    /**
     * @param mixed $roofMaterial
     */
    public function setRoofMaterial($roofMaterial)
    {
        $this->roofMaterial = $roofMaterial;
    }

    /**
     * @return mixed
     */
    public function getBuildingMaterial()
    {
        return $this->buildingMaterial;
    }

    /**
     * @param mixed $buildingMaterial
     */
    public function setBuildingMaterial($buildingMaterial)
    {
        $this->buildingMaterial = $buildingMaterial;
    }

    /**
     * @return mixed
     */
    public function getConstructionYear()
    {
        return $this->constructionYear;
    }

    /**
     * @param mixed $constructionYear
     */
    public function setConstructionYear($constructionYear)
    {
        $this->constructionYear = $constructionYear;
    }

    /**
     * @return mixed
     */
    public function getNumberOfFloors()
    {
        return $this->numberOfFloors;
    }

    /**
     * @param mixed $numberOfFloors
     */
    public function setNumberOfFloors($numberOfFloors)
    {
        $this->numberOfFloors = $numberOfFloors;
    }

    /**
     * @return mixed
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * @param mixed $heating
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $medias
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
    }

    /**
     * @return mixed
     */
    public function getSecurities()
    {
        return $this->securities;
    }

    /**
     * @param mixed $securities
     */
    public function setSecurities($securities)
    {
        $this->securities = $securities;
    }

    /**
     * @return mixed
     */
    public function getFence()
    {
        return $this->fence;
    }

    /**
     * @param mixed $fence
     */
    public function setFence($fence)
    {
        $this->fence = $fence;
    }

    /**
     * @return mixed
     */
    public function getCategoryIdOtodom()
    {
        return $this->categoryIdOtodom;
    }

    /**
     * @param mixed $categoryIdOtodom
     */
    public function setCategoryIdOtodom($categoryIdOtodom)
    {
        $this->categoryIdOtodom = $categoryIdOtodom;
    }

    /**
     * @return mixed
     */
    public function getBuildingOwnership()
    {
        return $this->buildingOwnership;
    }

    /**
     * @param mixed $buildingOwnership
     */
    public function setBuildingOwnership($buildingOwnership)
    {
        $this->buildingOwnership = $buildingOwnership;
    }

    /**
     * @return mixed
     */
    public function getHeatings()
    {
        return $this->heatings;
    }

    /**
     * @param mixed $heatings
     */
    public function setHeatings($heatings)
    {
        $this->heatings = $heatings;
    }

    /**
     * @return mixed
     */
    public function getFences()
    {
        return $this->fences;
    }

    /**
     * @param mixed $fences
     */
    public function setFences($fences)
    {
        $this->fences = $fences;
    }

}