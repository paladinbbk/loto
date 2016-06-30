<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 */
class Cart
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
    private $rows;

    /**
     * @var \Bundles\LotoBundle\Entity\CartSet
     */
    private $cartSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rows = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rows
     *
     * @param \Bundles\LotoBundle\Entity\Row $rows
     * @return Cart
     */
    public function addRow(\Bundles\LotoBundle\Entity\Row $rows)
    {
        $this->rows[] = $rows;

        return $this;
    }

    /**
     * Remove rows
     *
     * @param \Bundles\LotoBundle\Entity\Row $rows
     */
    public function removeRow(\Bundles\LotoBundle\Entity\Row $rows)
    {
        $this->rows->removeElement($rows);
    }

    /**
     * Get rows
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set cartSet
     *
     * @param \Bundles\LotoBundle\Entity\CartSet $cartSet
     * @return Cart
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
}
