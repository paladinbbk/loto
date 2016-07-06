<?php

namespace Bundles\LotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Number
 */
class Number
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $status;


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
     * Set number
     *
     * @param integer $number
     * @return Number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Number
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
     * @var \Bundles\LotoBundle\Entity\Row
     */
    private $row;


    /**
     * Set row
     *
     * @param \Bundles\LotoBundle\Entity\Row $row
     * @return Number
     */
    public function setRow(\Bundles\LotoBundle\Entity\Row $row = null)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return \Bundles\LotoBundle\Entity\Row 
     */
    public function getRow()
    {
        return $this->row;
    }
}
