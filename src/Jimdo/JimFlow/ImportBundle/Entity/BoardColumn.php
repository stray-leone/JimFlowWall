<?php

namespace Jimdo\JimFlow\ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * Jimdo\JimFlow\ImportBundle\Entity\BoardColumn
 */
class BoardColumn
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var integer $ordering
     */
    private $ordering;

    /**
     * @var string $status
     */
    private $status;    
    
    /**
     * @var Jimdo\JimFlow\ImportBundle\Entity\Board $board
     */
    private $board;

    /**
     * @var ArrayCollection $ticketsToColumn
     */
    private $ticketsToColumn;

    
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set ordering
     *
     * @param integer $ordering
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
    
    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }    

    /**
     * Set board
     *
     * @param Jimdo\JimFlow\ImportBundle\Entity\Board $board
     */
    public function setBoard($board)
    {
        $this->board = $board;
    }

    /**
     * Get board
     *
     * @return Jimdo\JimFlow\ImportBundle\Entity\Board
     */
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * Get ticketsToColumn
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getTicketsToColumn()
    {
        return $this->ticketsToColumn;
    }
}