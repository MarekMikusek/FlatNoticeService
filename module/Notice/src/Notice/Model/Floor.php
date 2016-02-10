<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Floor
 * @package Notice\Model
 * @ORM\Entity
 */
class Floor
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @ORM\Column(type="text")
     */
    public $floor;

    /**
     * @ORM\Column(type="integer")
     */
    public $floorOtodom;

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
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getFloorOtodom()
    {
        return $this->floorOtodom;
    }

    /**
     * @param mixed $floorOtodom
     */
    public function setFloorOtodom($floorOtodom)
    {
        $this->floorOtodom = $floorOtodom;
    }

}