<?php

namespace Notice\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * Class sales-unit
 * @ORM\Entity
 * @package Notice\Model
 */
class SalesUnit
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
    public $offerNumber;

    /**
     * @ORM\Column(type="text")
     */
    public $title;

    /**
     * @ORM\ManyToOne(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $user;

    /**
     * @ORM\ManyToOne(targetEntity="type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    public $type;

    /**
     * @ORM\Column(type="integer")
     */
    public $price;

    /**
     * @ORM\ManyToOne(targetEntity="site")
     * @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     */
    public $site;

    /**
     * @ORM\ManyToOne(targetEntity="constructionStatus")
     * @ORM\JoinColumn(name="constructionStatus_id", referencedColumnName="id")
     */
    public $constructionStatus;

    /**
     * @ORM\Column(type="float")
     */
    public $landArea;

    /**
     * @ORM\Column(type="float")
     */
    public $area;

    /**
     * @ORM\Column(type="smallint")
     */
    public $numberOfRooms;

    /**
     * @ORM\Column(type="smallint")
     */
    public $numberOfBathrooms;

    /**
     * @ORM\ManyToOne(targetEntity="GarretType")
     * @ORM\JoinColumn(name="garretType_id", referencedColumnName="id")
     */
    public $garretType;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isNew;

    /**
     * @ORM\Column(type="text")
     */
    public $noticeTitle;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\ManyToOne(targetEntity="floor")
     * @ORM\JoinColumn(name="floor_id", referencedColumnName="id")
     */
    public $floor;

    /**
     * @ORM\Column(type="date")
     */
    protected $availableFrom;

    /**
     * @ORM\ManyToOne(targetEntity="noise")
     * @ORM\JoinColumn(name="noise_id", referencedColumnName="id")
     */
    protected $noise;

    /**
     * @ORM\ManyToMany(targetEntity="extra")
     * @ORM\JoinTable(name="salesUnits_extras",
     *      joinColumns={@ORM\JoinColumn(name="salesUnit_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="extra_id", referencedColumnName="id")}
     *  )
     */
    public $extras;

    /**
     * @ORM\ManyToMany(targetEntity="medium")
     * @ORM\JoinTable(name="salesunits_medias",
     *     joinColumns={@ORM\JoinColumn(name="salesunit_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="medium_id", referencedColumnName="id")}
     *     )
     */
    public $medias;

    public function addExtras(Collection $extras){
        foreach($extras as $extra){
            $this->extras->add($extra);
        }
    }

    public function removeExtras(Collection $extras){
        foreach($extras as $extra){
            $this->extras->removeElement($extra);
        }
    }

    public function addMedias(Collection $medias){
        foreach($medias as $medium){
            $this->medias->add($medium);
        }
    }

    public function removeMedias(Collection $medias){
        foreach($medias as $medium){
            $this->medias->removeElement($medium);
        }
    }

    public function __construct()
    {
        $this->extras = new ArrayCollection();
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getConstructionStatus()
    {
        return $this->constructionStatus;
    }

    /**
     * @param mixed $constructionStatus
     */
    public function setConstructionStatus($constructionStatus)
    {
        $this->constructionStatus = $constructionStatus;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
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
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * @param mixed $landArea
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;
    }

    /**
     * @return mixed
     */
    public function getNoOfRooms()
    {
        return $this->noOfRooms;
    }

    /**
     * @param mixed $noOfRooms
     */
    public function setNoOfRooms($noOfRooms)
    {
        $this->noOfRooms = $noOfRooms;
    }

    /**
     * @return mixed
     */
    public function getNoOfBathrooms()
    {
        return $this->noOfBathrooms;
    }

    /**
     * @param mixed $noOfBathrooms
     */
    public function setNoOfBathrooms($noOfBathrooms)
    {
        $this->noOfBathrooms = $noOfBathrooms;
    }

    /**
     * @return mixed
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * @param mixed $isNew
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;
    }

    /**
     * @return mixed
     */
    public function getNoticeTitle()
    {
        return $this->noticeTitle;
    }

    /**
     * @param mixed $noticeTitle
     */
    public function setNoticeTitle($noticeTitle)
    {
        $this->noticeTitle = $noticeTitle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * @param mixed $availableFrom
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;
    }

    /**
     * @return mixed
     */
    public function getOfferNumber()
    {
        return $this->offerNumber;
    }

    /**
     * @param mixed $offerNumber
     */
    public function setOfferNumber($offerNumber)
    {
        $this->offerNumber = $offerNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getNoise()
    {
        return $this->noise;
    }

    /**
     * @param mixed $noise
     */
    public function setNoise($noise)
    {
        $this->noise = $noise;
    }

}