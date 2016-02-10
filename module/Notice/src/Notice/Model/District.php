<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class district
 * @ORM\Entity
 * @package Notice\Model
 */

class District
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
    public $districtName;

    /**
     * @ORM\Column(type="text")
     */
    public $nameOtodom;

    /**
     * @ORM\Column(type="text")
     */
    public $nameDomiporta;

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
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * @param mixed $districtName
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
    }

    /**
     * @return mixed
     */
    public function getNameOtodom()
    {
        return $this->nameOtodom;
    }

    /**
     * @param mixed $nameOtodom
     */
    public function setNameOtodom($nameOtodom)
    {
        $this->nameOtodom = $nameOtodom;
    }

    /**
     * @return mixed
     */
    public function getNameDomiporta()
    {
        return $this->nameDomiporta;
    }

    /**
     * @param mixed $nameDomiporta
     */
    public function setNameDomiporta($nameDomiporta)
    {
        $this->nameDomiporta = $nameDomiporta;
    }


}