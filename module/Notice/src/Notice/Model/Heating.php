<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class heating
 * @ORM\Entity
 * @package Notice\Model
 */
class Heating
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="text")
     */
    public $heatingName;

    /**
     * @ORM\Column(type="text")
     */
    public $Otodom;

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
    public function getHeatingName()
    {
        return $this->heatingName;
    }

    /**
     * @param mixed $heatingName
     */
    public function setHeatingName($heatingName)
    {
        $this->heatingName = $heatingName;
    }

    /**
     * @return mixed
     */
    public function getOtodom()
    {
        return $this->Otodom;
    }

    /**
     * @param mixed $Otodom
     */
    public function setOtodom($Otodom)
    {
        $this->Otodom = $Otodom;
    }

}