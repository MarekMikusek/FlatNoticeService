<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PropertyUse
 * @package Notice\Model
 * @ORM\Entity
 */
class PropertyUse
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $propertyUse;

    /**
     * @ORM\Column(type="integer")
     */
    protected $otodom;

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
    public function getPropertyUse()
    {
        return $this->propertyUse;
    }

    /**
     * @param mixed $propertyUse
     */
    public function setPropertyUse($propertyUse)
    {
        $this->propertyUse = $propertyUse;
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