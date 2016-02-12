<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class building-type
 * @ORM\Entity
 * @package Notice\Model
 */
class BuildingType
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
    public $type;

    /**
     * @ORM\Column(type="integer")
     */
    public $nameOtodom;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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

}