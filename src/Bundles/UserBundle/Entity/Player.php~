<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 */
class Player
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $wins;

    /**
     * @var int
     */
    private $rating;

    /**
     * @var int
     */
    private $wallet;

    /**
     * @var string
     */
    private $avatar;


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
     * Set wins
     *
     * @param integer $wins
     * @return Player
     */
    public function setWins($wins)
    {
        $this->wins = $wins;

        return $this;
    }

    /**
     * Get wins
     *
     * @return integer 
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Player
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set wallet
     *
     * @param integer $wallet
     * @return Player
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get wallet
     *
     * @return integer 
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Player
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $friends;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $friendWithMe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->friends = new \Doctrine\Common\Collections\ArrayCollection();
        $this->friendWithMe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Player
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
     * Add friends
     *
     * @param \Bundles\LotoBundle\Entity\Player $friends
     * @return Player
     */
    public function addFriend(\Bundles\LotoBundle\Entity\Player $friends)
    {
        $this->friends[] = $friends;

        return $this;
    }

    /**
     * Remove friends
     *
     * @param \Bundles\LotoBundle\Entity\Player $friends
     */
    public function removeFriend(\Bundles\LotoBundle\Entity\Player $friends)
    {
        $this->friends->removeElement($friends);
    }

    /**
     * Get friends
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * Add friendWithMe
     *
     * @param \Bundles\LotoBundle\Entity\Player $friendWithMe
     * @return Player
     */
    public function addFriendWithMe(\Bundles\LotoBundle\Entity\Player $friendWithMe)
    {
        $this->friendWithMe[] = $friendWithMe;

        return $this;
    }

    /**
     * Remove friendWithMe
     *
     * @param \Bundles\LotoBundle\Entity\Player $friendWithMe
     */
    public function removeFriendWithMe(\Bundles\LotoBundle\Entity\Player $friendWithMe)
    {
        $this->friendWithMe->removeElement($friendWithMe);
    }

    /**
     * Get friendWithMe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFriendWithMe()
    {
        return $this->friendWithMe;
    }
}
