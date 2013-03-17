<?php

namespace Core\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity
 */
class Items
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_price", type="integer", nullable=true)
     */
    private $totalPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="recipe_price", type="integer", nullable=true)
     */
    private $recipePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crawled", type="boolean", nullable=false)
     */
    private $crawled;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Items
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Items
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set totalPrice
     *
     * @param integer $totalPrice
     * @return Items
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    
        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return integer 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set recipePrice
     *
     * @param integer $recipePrice
     * @return Items
     */
    public function setRecipePrice($recipePrice)
    {
        $this->recipePrice = $recipePrice;
    
        return $this;
    }

    /**
     * Get recipePrice
     *
     * @return integer 
     */
    public function getRecipePrice()
    {
        return $this->recipePrice;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Items
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Items
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Items
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set crawled
     *
     * @param boolean $crawled
     * @return Items
     */
    public function setCrawled($crawled)
    {
        $this->crawled = $crawled;
    
        return $this;
    }

    /**
     * Get crawled
     *
     * @return boolean 
     */
    public function getCrawled()
    {
        return $this->crawled;
    }
}