<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-18
 * Time: 11:27
 */

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Parking
 * @ORM\Entity
 * @package Notice\Model
 */
class Parking
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
    protected $parkingName;

    /**
     * @ORM\Column(type="text")
     */
    protected $gumtree;

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
    public function getParkingName()
    {
        return $this->parkingName;
    }

    /**
     * @param mixed $parkingName
     */
    public function setParkingName($parkingName)
    {
        $this->parkingName = $parkingName;
    }

    /**
     * @return mixed
     */
    public function getGumtree()
    {
        return $this->gumtree;
    }

    /**
     * @param mixed $gumtree
     */
    public function setGumtree($gumtree)
    {
        $this->gumtree = $gumtree;
    }

}