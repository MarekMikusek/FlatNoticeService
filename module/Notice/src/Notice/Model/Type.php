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
     * @ORM\Column(type="text")
     */
    public $gumtree;

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

    /**
     * @return mixed
     */
    public function getGumtree()
    {
        return $this->gumtree;
    }

    /**
     * @param mixed $gumtree
     */
    public function setGumtree($gumtree)
    {
        $this->gumtree = $gumtree;
    }


}