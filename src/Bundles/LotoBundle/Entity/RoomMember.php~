<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoomMember
 */
class RoomMember
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Bundles\LotoBundle\Entity\CartSet
     */
    private $cartSet;

    /**
     * @var \Bundles\LotoBundle\Entity\Player
     */
    private $player;

    /**
     * @var \Bundles\LotoBundle\Entity\Room
     */
    private $room;


    /**
     * Set cartSet
     *
     * @param \Bundles\LotoBundle\Entity\CartSet $cartSet
     * @return RoomMember
     */
    public function setCartSet(\Bundles\LotoBundle\Entity\CartSet $cartSet = null)
    {
        $this->cartSet = $cartSet;

        return $this;
    }

    /**
     * Get cartSet
     *
     * @return \Bundles\LotoBundle\Entity\CartSet 
     */
    public function getCartSet()
    {
        return $this->cartSet;
    }

    /**
     * Set player
     *
     * @param \Bundles\LotoBundle\Entity\Player $player
     * @return RoomMember
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
     * Set room
     *
     * @param \Bundles\LotoBundle\Entity\Room $room
     * @return RoomMember
     */
    public function setRoom(\Bundles\LotoBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \Bundles\LotoBundle\Entity\Room 
     */
    public function getRoom()
    {
        return $this->room;
    }
}
