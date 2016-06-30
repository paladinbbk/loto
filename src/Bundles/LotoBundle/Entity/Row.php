<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Row
 */
class Row
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
    private $numbers;

    /**
     * @var \Bundles\LotoBundle\Entity\Cart
     */
    private $cart;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numbers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add numbers
     *
     * @param \Bundles\LotoBundle\Entity\Number $numbers
     * @return Row
     */
    public function addNumber(\Bundles\LotoBundle\Entity\Number $numbers)
    {
        $this->numbers[] = $numbers;

        return $this;
    }

    /**
     * Remove numbers
     *
     * @param \Bundles\LotoBundle\Entity\Number $numbers
     */
    public function removeNumber(\Bundles\LotoBundle\Entity\Number $numbers)
    {
        $this->numbers->removeElement($numbers);
    }

    /**
     * Get numbers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * Set cart
     *
     * @param \Bundles\LotoBundle\Entity\Cart $cart
     * @return Row
     */
    public function setCart(\Bundles\LotoBundle\Entity\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \Bundles\LotoBundle\Entity\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }
}
