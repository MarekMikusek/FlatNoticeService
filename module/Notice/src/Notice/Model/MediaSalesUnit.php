<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MediaMask
 * @package Notice\Model
 * @ORM\Entity
 */
class MediaSalesUnit
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
    public $mediaName;

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
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * @param mixed $mediaName
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
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