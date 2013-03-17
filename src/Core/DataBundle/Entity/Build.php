<?php

namespace Core\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Build
 *
 * @ORM\Table(name="build")
 * @ORM\Entity
 */
class Build
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var array
     *
     * @ORM\Column(name="runes", type="array", nullable=true)
     */
    private $runes;

    /**
     * @var array
     *
     * @ORM\Column(name="bags", type="array", nullable=true)
     */
    private $bags;

    /**
     * @var array
     *
     * @ORM\Column(name="spells", type="array", nullable=true)
     */
    private $spells;

    /**
     * @var array
     *
     * @ORM\Column(name="abilities", type="array", nullable=true)
     */
    private $abilities;

    /**
     * @var array
     *
     * @ORM\Column(name="mastery", type="array", nullable=true)
     */
    private $mastery;

    /**
     * @var array
     *
     * @ORM\Column(name="stats", type="array", nullable=true)
     */
    private $stats;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crawled", type="boolean", nullable=false)
     */
    private $crawled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="crawled_at", type="datetime", nullable=false)
     */
    private $crawledAt;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @var \Hero
     *
     * @ORM\ManyToOne(targetEntity="Hero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hero_id", referencedColumnName="id")
     * })
     */
    private $hero;



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
     * Set title
     *
     * @param string $title
     * @return Build
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

    /**
     * Set runes
     *
     * @param array $runes
     * @return Build
     */
    public function setRunes($runes)
    {
        $this->runes = $runes;
    
        return $this;
    }

    /**
     * Get runes
     *
     * @return array 
     */
    public function getRunes()
    {
        return $this->runes;
    }

    /**
     * Set bags
     *
     * @param array $bags
     * @return Build
     */
    public function setBags($bags)
    {
        $this->bags = $bags;
    
        return $this;
    }

    /**
     * Get bags
     *
     * @return array 
     */
    public function getBags()
    {
        return $this->bags;
    }

    /**
     * Set spells
     *
     * @param array $spells
     * @return Build
     */
    public function setSpells($spells)
    {
        $this->spells = $spells;
    
        return $this;
    }

    /**
     * Get spells
     *
     * @return array 
     */
    public function getSpells()
    {
        return $this->spells;
    }

    /**
     * Set abilities
     *
     * @param array $abilities
     * @return Build
     */
    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;
    
        return $this;
    }

    /**
     * Get abilities
     *
     * @return array 
     */
    public function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * Set mastery
     *
     * @param array $mastery
     * @return Build
     */
    public function setMastery($mastery)
    {
        $this->mastery = $mastery;
    
        return $this;
    }

    /**
     * Get mastery
     *
     * @return array 
     */
    public function getMastery()
    {
        return $this->mastery;
    }

    /**
     * Set stats
     *
     * @param array $stats
     * @return Build
     */
    public function setStats($stats)
    {
        $this->stats = $stats;
    
        return $this;
    }

    /**
     * Get stats
     *
     * @return array 
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Build
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set crawled
     *
     * @param boolean $crawled
     * @return Build
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
     * Set crawledAt
     *
     * @param \DateTime $crawledAt
     * @return Build
     */
    public function setCrawledAt($crawledAt)
    {
        $this->crawledAt = $crawledAt;
    
        return $this;
    }

    /**
     * Get crawledAt
     *
     * @return \DateTime 
     */
    public function getCrawledAt()
    {
        return $this->crawledAt;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Build
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
     * Set hero
     *
     * @param \Core\DataBundle\Entity\Hero $hero
     * @return Build
     */
    public function setHero(\Core\DataBundle\Entity\Hero $hero = null)
    {
        $this->hero = $hero;
    
        return $this;
    }

    /**
     * Get hero
     *
     * @return \Core\DataBundle\Entity\Hero 
     */
    public function getHero()
    {
        return $this->hero;
    }
}