<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Fence
 * @package Notice\Model
 * @ORM\Entity
 */
class Fence
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="text")
     */
    public $fenceName;

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
    public function getFenceName()
    {
        return $this->fenceName;
    }

    /**
     * @param mixed $fenceName
     */
    public function setFenceName($fenceName)
    {
        $this->fenceName = $fenceName;
    }

}