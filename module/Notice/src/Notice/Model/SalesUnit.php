<?php

namespace Notice\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

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
    public $title;

    /**
     * @ORM\ManyToOne(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $user;

    /**
     * @ORM\ManyToOne(targetEntity="site")
     * @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     */
    public $site;

    /** typ nieruchomości: mieszkanie, dom, itd
     * @ORM\ManyToOne(targetEntity="type")
     * @ORM\joinColumn(name="type", referencedColumnName="id")
     */
    public $type;

    /**
     * @ORM\Column(type="float")
     */
    public $area;

    /**
     * @ORM\Column(type="smallint")
     */
    public $noOfRooms;

    /**
     * @ORM\Column(type="smallint")
     */
    public $noOfBathrooms;

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
     * @ORM\Column(type="smallint")
     */
    public $floor;

    /**
     * @ORM\Column(type="text")
     */
    protected $linkToPhoto;

    /**
     * @ORM\Column(type="date")
     */
    protected $availableFrom;

    /**
     * @ORM\ManyToMany(targetEntity="extras")
     * @ORM\JoinTable(name="sites_extras",
     *      joinColumns={@ORM\JoinColumn(name="salesUnit_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="extras_id", referencedColumnName="id")}
     *  )
     */
    public $extras;

    public function __construct()
    {
        $this->extras = new ArrayCollection();
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
    public function getLinkToPhoto()
    {
        return $this->linkToPhoto;
    }

    /**
     * @param mixed $linkToPhoto
     */
    public function setLinkToPhoto($linkToPhoto)
    {
        $this->linkToPhoto = $linkToPhoto;
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

}