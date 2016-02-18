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
//
//    /**
//     * @ORM\Column(type="boolean")
//     */
//    public $toBePublishedOnOtodom;
//
//    /**
//     * @ORM\Column(type="boolean")
//     */
//    public $toBePublishedOnDomiporta;
//
//    /**
//     * @ORM\Column(type="boolean")
//     */
//    public $toBePublishedOnGumtree;

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

//    /**
//     * @return mixed
//     */
//    public function getToBePublishedOnOtodom()
//    {
//        return $this->toBePublishedOnOtodom;
//    }
//
//    /**
//     * @param mixed $toBePublishedOnOtodom
//     */
//    public function setToBePublishedOnOtodom($toBePublishedOnOtodom)
//    {
//        $this->toBePublishedOnOtodom = $toBePublishedOnOtodom;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getToBePublishedOnDomiporta()
//    {
//        return $this->toBePublishedOnDomiporta;
//    }
//
//    /**
//     * @param mixed $toBePublishedOnDomiporta
//     */
//    public function setToBePublishedOnDomiporta($toBePublishedOnDomiporta)
//    {
//        $this->toBePublishedOnDomiporta = $toBePublishedOnDomiporta;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getIsPublishedOnGumtree()
//    {
//        return $this->isPublishedOnGumtree;
//    }
//
//    /**
//     * @param mixed $isPublishedOnGumtree
//     */
//    public function setIsPublishedOnGumtree($isPublishedOnGumtree)
//    {
//        $this->isPublishedOnGumtree = $isPublishedOnGumtree;
//    }

}