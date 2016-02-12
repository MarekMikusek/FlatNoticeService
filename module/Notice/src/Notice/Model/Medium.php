<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Medias
 * @package Notice\Model
 * @ORM\Entity
 */
class Medium
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="text")
     */
    public $medium;

    /**
     * @ORM\Column(type="smallint")
     */
    public $flatOtodom;

    /**
     * @ORM\Column(type="smallint")
     */
    public $houseOtodom;

    /**
     * @ORM\Column(type="smallint")
     */
    public $commercialOtodom;

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
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param mixed $medium
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
    }

    /**
     * @return mixed
     */
    public function getFlatOtodom()
    {
        return $this->flatOtodom;
    }

    /**
     * @param mixed $flatOtodom
     */
    public function setFlatOtodom($flatOtodom)
    {
        $this->flatOtodom = $flatOtodom;
    }

    /**
     * @return mixed
     */
    public function getHouseOtodom()
    {
        return $this->houseOtodom;
    }

    /**
     * @param mixed $houseOtodom
     */
    public function setHouseOtodom($houseOtodom)
    {
        $this->houseOtodom = $houseOtodom;
    }

    /**
     * @return mixed
     */
    public function getCommercialOtodom()
    {
        return $this->commercialOtodom;
    }

    /**
     * @param mixed $commercialOtodom
     */
    public function setCommercialOtodom($commercialOtodom)
    {
        $this->commercialOtodom = $commercialOtodom;
    }

}