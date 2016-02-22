<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class type
 * @ORM\Entity
 * @package Notice\Model
 */
class Type
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
    public $name;

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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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