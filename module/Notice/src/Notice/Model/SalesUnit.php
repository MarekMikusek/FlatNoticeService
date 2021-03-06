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
     * @ORM\ManyToOne(targetEntity="parking")
     * @ORM\JoinColumn(name="parking_id", referencedColumnName="id")
     */
    protected $parking;

    /**
     * @ORM\ManyToOne(targetEntity="windows")
     * @ORM\JoinColumn(name="windows_id", referencedColumnName="id")
     */
    protected $windows;

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

    /**
     * @ORM\ManyToMany(targetEntity="photo")
     * @ORM\JoinTable(name="salesunits_photos",
     *     joinColumns={@ORM\JoinColumn(name="salesunit_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="link_id", referencedColumnName="id")}
     *     )
     */
    private $photos;

    /**
     * @ORM\ManyToMany(targetEntity="propertyUse")
     * @ORM\JoinTable(name="salesunits_propertyuses",
     *     joinColumns={@ORM\JoinColumn(name="salesunit_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="propertyuse_id", referencedColumnName="id")}
     *     )
     */
    private $propertyUses;

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

    public function addPhotos(Collection $photos)
    {
        foreach ($photos as $photo){
            $this->photos->add($photo);
        }
    }

    public function removePhotos(Collection $photos)
    {
        foreach ($photos as $photo){
            $this->photos->removeElement($photo);
        }
    }

    public function addPropertyUses(Collection $propertyUses)
    {
        foreach ($propertyUses as $propetyUse){
            $this->propertyUses->add($propetyUse);
        }
    }

    public function removePropertyUses(Collection $propertyUses)
    {
        foreach ($propertyUses as $propertyUse){
            $this->propertyUses->removeElement($propertyUse);
        }
    }

    public function __construct()
    {
        $this->extras = new ArrayCollection();
        $this->medias = new ArrayCollection();
        $this->photos = new ArrayCollection();
        $this->propertyUses = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return mixed
     */
    public function getPropertyUses()
    {
        return $this->propertyUses;
    }

    /**
     * @param mixed $propertyUses
     */
    public function setPropertyUses($propertyUses)
    {
        $this->propertyUses = $propertyUses;
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

    /**
     * @return mixed
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * @param mixed $parking
     */
    public function setParking($parking)
    {
        $this->parking = $parking;
    }

    /**
     * @return mixed
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }

    /**
     * @param mixed $numberOfRooms
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->numberOfRooms = $numberOfRooms;
    }

    /**
     * @return mixed
     */
    public function getNumberOfBathrooms()
    {
        return $this->numberOfBathrooms;
    }

    /**
     * @param mixed $numberOfBathrooms
     */
    public function setNumberOfBathrooms($numberOfBathrooms)
    {
        $this->numberOfBathrooms = $numberOfBathrooms;
    }

    /**
     * @return mixed
     */
    public function getGarretType()
    {
        return $this->garretType;
    }

    /**
     * @param mixed $garretType
     */
    public function setGarretType($garretType)
    {
        $this->garretType = $garretType;
    }

    /**
     * @return mixed
     */
    public function getWindows()
    {
        return $this->windows;
    }

    /**
     * @param mixed $windows
     */
    public function setWindows($windows)
    {
        $this->windows = $windows;
    }

}