<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartSet
 */
class CartSet
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $carts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->carts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add carts
     *
     * @param \Bundles\LotoBundle\Entity\Cart $carts
     * @return CartSet
     */
    public function addCart(\Bundles\LotoBundle\Entity\Cart $carts)
    {
        $this->carts[] = $carts;

        return $this;
    }

    /**
     * Remove carts
     *
     * @param \Bundles\LotoBundle\Entity\Cart $carts
     */
    public function removeCart(\Bundles\LotoBundle\Entity\Cart $carts)
    {
        $this->carts->removeElement($carts);
    }

    /**
     * Get carts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCarts()
    {
        return $this->carts;
    }
}
