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
    public $otodom;

    /**
     * @ORM\Column(type="text")
     */
    public $domiporta;

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

    /**
     * @return mixed
     */
    public function getOtodom()
    {
        return $this->otodom;
    }

    /**
     * @param mixed $otodom
     */
    public function setOtodom($otodom)
    {
        $this->otodom = $otodom;
    }

    /**
     * @return mixed
     */
    public function getDomiporta()
    {
        return $this->domiporta;
    }

    /**
     * @param mixed $domiporta
     */
    public function setDomiporta($domiporta)
    {
        $this->domiporta = $domiporta;
    }

}