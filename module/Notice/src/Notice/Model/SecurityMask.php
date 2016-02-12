<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SecurityMask
 * @package Notice\Model
 * @ORM\Entity
 */
class SecurityMask
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
    public $securityName;

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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSecurityName()
    {
        return $this->securityName;
    }

    /**
     * @param mixed $securityName
     */
    public function setSecurityName($securityName)
    {
        $this->securityName = $securityName;
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