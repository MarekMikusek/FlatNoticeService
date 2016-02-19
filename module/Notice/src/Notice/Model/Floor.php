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
    public $otodom;

    /**
     * @ORM\Column(type="integer")
     */
    protected $domiporta;

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