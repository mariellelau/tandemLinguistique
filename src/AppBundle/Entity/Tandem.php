<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tandem
 */
class Tandem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $user1;


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
     * Set user1
     *
     * @param string $user1
     * @return Tandem
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return string 
     */
    public function getUser1()
    {
        return $this->user1;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user2;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user1
     *
     * @param \AppBundle\Entity\User $user1
     * @return Tandem
     */
    public function addUser1(\AppBundle\Entity\User $user1)
    {
        $this->user1[] = $user1;

        return $this;
    }

    /**
     * Remove user1
     *
     * @param \AppBundle\Entity\User $user1
     */
    public function removeUser1(\AppBundle\Entity\User $user1)
    {
        $this->user1->removeElement($user1);
    }

    /**
     * Add user2
     *
     * @param \AppBundle\Entity\User $user2
     * @return Tandem
     */
    public function addUser2(\AppBundle\Entity\User $user2)
    {
        $this->user2[] = $user2;

        return $this;
    }

    /**
     * Remove user2
     *
     * @param \AppBundle\Entity\User $user2
     */
    public function removeUser2(\AppBundle\Entity\User $user2)
    {
        $this->user2->removeElement($user2);
    }

    /**
     * Get user2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set user2
     *
     * @param \AppBundle\Entity\User $user2
     * @return Tandem
     */
    public function setUser2(\AppBundle\Entity\User $user2 = null)
    {
        $this->user2 = $user2;

        return $this;
    }
}
