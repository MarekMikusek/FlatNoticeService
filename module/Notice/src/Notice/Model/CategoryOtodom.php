<?php
/**
 * Created by PhpStorm.
 * user: Konto
 * Date: 2016-02-02
 * Time: 10:56
 */

namespace Notice\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class category-otodom
 * @ORM\Entity
 * @package Notice\Model
 */
class CategoryOtodom
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
    public $categoryName;

    /**
     * @ORM\Column(type="integer")
     */
    public $category;

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
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}