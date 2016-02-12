<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ExtraMask
 * @package Notice\Model
 * @ORM\Entity
 */
class Extra
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $extras;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $flatOtodom;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $houseOtodom;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $commercialOtodom;


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
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getFlatOtodom()
    {
        return $this->flatOtodom;
    }

    /**
     * @param mixed $flatOtodom
     */
    public function setFlatOtodom($flatOtodom)
    {
        $this->flatOtodom = $flatOtodom;
    }

    /**
     * @return mixed
     */
    public function getHouseOtodom()
    {
        return $this->houseOtodom;
    }

    /**
     * @param mixed $houseOtodom
     */
    public function setHouseOtodom($houseOtodom)
    {
        $this->houseOtodom = $houseOtodom;
    }

    /**
     * @return mixed
     */
    public function getCommercialOtodom()
    {
        return $this->commercialOtodom;
    }

    /**
     * @param mixed $commercialOtodom
     */
    public function setCommercialOtodom($commercialOtodom)
    {
        $this->commercialOtodom = $commercialOtodom;
    }

}