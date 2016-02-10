<?php

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class MediaMask
 * @package Notice\Model
 * @ORM\Entity
 */
class MediaMask
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
}