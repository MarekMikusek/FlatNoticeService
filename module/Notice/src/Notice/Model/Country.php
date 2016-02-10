<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Country
 * @package Notice\Model
 * @ORM\Entity
 */
class Country
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
    public $countryName;

    /**
     * @ORM\Column(type="integer")
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
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param mixed $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
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