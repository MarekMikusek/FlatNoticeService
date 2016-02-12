<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 11:23
 */

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class RoofMaterial
 * @ORM\Entity
 * @package Notice\Model
 */
class RoofMaterial
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
    public $roofMaterialName;

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
    public function getRoofMaterialName()
    {
        return $this->roofMaterialName;
    }

    /**
     * @param mixed $roofMaterialName
     */
    public function setRoofMaterialName($roofMaterialName)
    {
        $this->roofMaterialName = $roofMaterialName;
    }

}