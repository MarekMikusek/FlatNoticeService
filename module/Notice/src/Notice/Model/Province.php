<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class province
 * @ORM\Entity
 * @package Notice\Model
 */
class Province
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
    public $provinceName;

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
     * @return mixed
     */
    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * @param mixed $provinceName
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;
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