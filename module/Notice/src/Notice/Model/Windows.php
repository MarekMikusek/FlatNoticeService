<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Windows
 * @package Notice\Model
 * @ORM\Entity
 */
class Windows
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
    public $windowsMaterial;

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
    public function getWindowsMaterial()
    {
        return $this->windowsMaterial;
    }

    /**
     * @param mixed $windowsMaterial
     */
    public function setWindowsMaterial($windowsMaterial)
    {
        $this->windowsMaterial = $windowsMaterial;
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