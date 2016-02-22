<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 2016-02-19
 * Time: 10:01
 */

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Photo
 * @package Notice\Model
 * @ORM\Entity
 */
class Photo
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
    public $fileName;

    /**
     * @ORM\Column(type="text")
     */
    public $link;

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
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

}