<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 */
class Room
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $limitUser;

    /**
     * @var bool
     */
    private $isPrivate;

    /**
     * @var bool
     */
    private $fastIs;

    /**
     * @var bool
     */
    private $crazyIs;

    /**
     * @var int
     */
    private $rate;


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
     * @return Room
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
     * Set limitUser
     *
     * @param string $limitUser
     * @return Room
     */
    public function setLimitUser($limitUser)
    {
        $this->limitUser = $limitUser;

        return $this;
    }

    /**
     * Get limitUser
     *
     * @return string 
     */
    public function getLimitUser()
    {
        return $this->limitUser;
    }

    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return Room
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return boolean 
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Set fastIs
     *
     * @param boolean $fastIs
     * @return Room
     */
    public function setFastIs($fastIs)
    {
        $this->fastIs = $fastIs;

        return $this;
    }

    /**
     * Get fastIs
     *
     * @return boolean 
     */
    public function getFastIs()
    {
        return $this->fastIs;
    }

    /**
     * Set crazyIs
     *
     * @param boolean $crazyIs
     * @return Room
     */
    public function setCrazyIs($crazyIs)
    {
        $this->crazyIs = $crazyIs;

        return $this;
    }

    /**
     * Get crazyIs
     *
     * @return boolean 
     */
    public function getCrazyIs()
    {
        return $this->crazyIs;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Room
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }
    /**
     * @var boolean
     */
    private $privateIs;


    /**
     * Set privateIs
     *
     * @param boolean $privateIs
     * @return Room
     */
    public function setPrivateIs($privateIs)
    {
        $this->privateIs = $privateIs;

        return $this;
    }

    /**
     * Get privateIs
     *
     * @return boolean 
     */
    public function getPrivateIs()
    {
        return $this->privateIs;
    }
}
