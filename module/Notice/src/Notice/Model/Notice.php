<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class notice
 * @ORM\Entity
 * @package Notice\Model
 */
class Notice
{

    protected $inputFilter;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isChanged;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isPublishedOnOtodom;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isPublishedOnDomiporta;

    /**
     * @ORM\Column(type="boolean")
     */
    public $isPublishedOnGumtree;

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
    public function getIsChanged()
    {
        return $this->isChanged;
    }

    /**
     * @param mixed $isChanged
     */
    public function setIsChanged($isChanged)
    {
        $this->isChanged = $isChanged;
    }

    /**
     * @return mixed
     */
    public function getIsPublishedOnOtodom()
    {
        return $this->isPublishedOnOtodom;
    }

    /**
     * @param mixed $isPublishedOnOtodom
     */
    public function setIsPublishedOnOtodom($isPublishedOnOtodom)
    {
        $this->isPublishedOnOtodom = $isPublishedOnOtodom;
    }

    /**
     * @return mixed
     */
    public function getIsPublishedOnDomiporta()
    {
        return $this->isPublishedOnDomiporta;
    }

    /**
     * @param mixed $isPublishedOnDomiporta
     */
    public function setIsPublishedOnDomiporta($isPublishedOnDomiporta)
    {
        $this->isPublishedOnDomiporta = $isPublishedOnDomiporta;
    }

    /**
     * @return mixed
     */
    public function getIsPublishedOnGumtree()
    {
        return $this->isPublishedOnGumtree;
    }

    /**
     * @param mixed $isPublishedOnGumtree
     */
    public function setIsPublishedOnGumtree($isPublishedOnGumtree)
    {
        $this->isPublishedOnGumtree = $isPublishedOnGumtree;
    }


}