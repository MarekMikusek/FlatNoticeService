<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-15
 * Time: 13:18
 */

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ConstructionStatus
 * @package Notice\Model
 * @ORM\Entity
 */
class ConstructionStatus
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
    public $statusName;

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
     * @return mixed
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * @param mixed $statusName
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;
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