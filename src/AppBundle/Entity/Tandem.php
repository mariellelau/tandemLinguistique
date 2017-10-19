<?php

namespace AppBundle\Entity;

/**
 * Tandem
 */
class Tandem
{
    /**
     * @var integer
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
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * @var \AppBundle\Entity\User
     */
    private $myTandem;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Tandem
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set myTandem
     *
     * @param \AppBundle\Entity\User $myTandem
     * @return Tandem
     */
    public function setMyTandem(\AppBundle\Entity\User $myTandem = null)
    {
        $this->myTandem = $myTandem;

        return $this;
    }

    /**
     * Get myTandem
     *
     * @return \AppBundle\Entity\User 
     */
    public function getMyTandem()
    {
        return $this->myTandem;
    }
}
