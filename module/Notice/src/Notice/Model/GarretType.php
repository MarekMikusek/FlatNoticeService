<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class GarretType
 * @package Notice\Model
 * @ORM\Entity
 */
class GarretType
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
    public $typeName;

    /**
     * @ORM\Column(type="integer")
     */
    public $otodom;

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
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * @param mixed $typeName
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
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

}