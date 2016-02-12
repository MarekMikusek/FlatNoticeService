<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class district
 * @ORM\Entity
 * @package Notice\Model
 */

class District
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
    public $districtName;

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
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * @param mixed $districtName
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
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