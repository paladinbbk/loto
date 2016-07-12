<?php

namespace Bundles\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


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
     * @var \Bundles\LotoBundle\Entity\Player
     */
    private $player;


    /**
     * Set player
     *
     * @param \Bundles\LotoBundle\Entity\Player $player
     * @return User
     */
    public function setPlayer(\Bundles\LotoBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \Bundles\LotoBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }
    

    /**
     * @ORM\PrePersist
     */
    public function createPlayerPostRegister()
    {
        $new_player = new \Bundles\LotoBundle\Entity\Player;
        $player = $new_player->setName('Name')->setUser($this->id);
        
        return $this->setPlayer($player);
    }
}
