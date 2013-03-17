<?php

namespace Core\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hero
 *
 * @ORM\Table(name="hero")
 * @ORM\Entity
 */
class Hero
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crawled", type="boolean", nullable=false)
     */
    private $crawled;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @var integer
     *
     * @ORM\Column(name="riot_points", type="integer", nullable=true)
     */
    private $riotPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="influence_points", type="integer", nullable=true)
     */
    private $influencePoints;

    /**
     * @var float
     *
     * @ORM\Column(name="health", type="float", nullable=true)
     */
    private $health;

    /**
     * @var float
     *
     * @ORM\Column(name="mana", type="float", nullable=true)
     */
    private $mana;

    /**
     * @var float
     *
     * @ORM\Column(name="speed", type="float", nullable=true)
     */
    private $speed;

    /**
     * @var float
     *
     * @ORM\Column(name="armor", type="float", nullable=true)
     */
    private $armor;

    /**
     * @var float
     *
     * @ORM\Column(name="resist", type="float", nullable=true)
     */
    private $resist;

    /**
     * @var float
     *
     * @ORM\Column(name="critical", type="float", nullable=true)
     */
    private $critical;

    /**
     * @var float
     *
     * @ORM\Column(name="health_regen", type="float", nullable=true)
     */
    private $healthRegen;

    /**
     * @var float
     *
     * @ORM\Column(name="mana_regen", type="float", nullable=true)
     */
    private $manaRegen;

    /**
     * @var float
     *
     * @ORM\Column(name="attack_range", type="float", nullable=true)
     */
    private $attackRange;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;



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
     * @return Hero
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
     * Set link
     *
     * @param string $link
     * @return Hero
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Hero
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
     * Set crawled
     *
     * @param boolean $crawled
     * @return Hero
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

    /**
     * Set image
     *
     * @param string $image
     * @return Hero
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
     * Set tags
     *
     * @param string $tags
     * @return Hero
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set riotPoints
     *
     * @param integer $riotPoints
     * @return Hero
     */
    public function setRiotPoints($riotPoints)
    {
        $this->riotPoints = $riotPoints;
    
        return $this;
    }

    /**
     * Get riotPoints
     *
     * @return integer 
     */
    public function getRiotPoints()
    {
        return $this->riotPoints;
    }

    /**
     * Set influencePoints
     *
     * @param integer $influencePoints
     * @return Hero
     */
    public function setInfluencePoints($influencePoints)
    {
        $this->influencePoints = $influencePoints;
    
        return $this;
    }

    /**
     * Get influencePoints
     *
     * @return integer 
     */
    public function getInfluencePoints()
    {
        return $this->influencePoints;
    }

    /**
     * Set health
     *
     * @param float $health
     * @return Hero
     */
    public function setHealth($health)
    {
        $this->health = $health;
    
        return $this;
    }

    /**
     * Get health
     *
     * @return float 
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set mana
     *
     * @param float $mana
     * @return Hero
     */
    public function setMana($mana)
    {
        $this->mana = $mana;
    
        return $this;
    }

    /**
     * Get mana
     *
     * @return float 
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set speed
     *
     * @param float $speed
     * @return Hero
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    
        return $this;
    }

    /**
     * Get speed
     *
     * @return float 
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set armor
     *
     * @param float $armor
     * @return Hero
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;
    
        return $this;
    }

    /**
     * Get armor
     *
     * @return float 
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set resist
     *
     * @param float $resist
     * @return Hero
     */
    public function setResist($resist)
    {
        $this->resist = $resist;
    
        return $this;
    }

    /**
     * Get resist
     *
     * @return float 
     */
    public function getResist()
    {
        return $this->resist;
    }

    /**
     * Set critical
     *
     * @param float $critical
     * @return Hero
     */
    public function setCritical($critical)
    {
        $this->critical = $critical;
    
        return $this;
    }

    /**
     * Get critical
     *
     * @return float 
     */
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Set healthRegen
     *
     * @param float $healthRegen
     * @return Hero
     */
    public function setHealthRegen($healthRegen)
    {
        $this->healthRegen = $healthRegen;
    
        return $this;
    }

    /**
     * Get healthRegen
     *
     * @return float 
     */
    public function getHealthRegen()
    {
        return $this->healthRegen;
    }

    /**
     * Set manaRegen
     *
     * @param float $manaRegen
     * @return Hero
     */
    public function setManaRegen($manaRegen)
    {
        $this->manaRegen = $manaRegen;
    
        return $this;
    }

    /**
     * Get manaRegen
     *
     * @return float 
     */
    public function getManaRegen()
    {
        return $this->manaRegen;
    }

    /**
     * Set attackRange
     *
     * @param float $attackRange
     * @return Hero
     */
    public function setAttackRange($attackRange)
    {
        $this->attackRange = $attackRange;
    
        return $this;
    }

    /**
     * Get attackRange
     *
     * @return float 
     */
    public function getAttackRange()
    {
        return $this->attackRange;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Hero
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}