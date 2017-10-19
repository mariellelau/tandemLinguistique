<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Overridden so that username is now optional
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->setUsername($email);
        return parent::setEmail($email);
    }

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    private $city;

    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $myTandem;


    /**
     * Set myTandem
     *
     * @param \AppBundle\Entity\User $myTandem
     * @return User
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
    /**
     * @var \AppBundle\Entity\Tandem
     */
    private $tandem;


    /**
     * Set tandem
     *
     * @param \AppBundle\Entity\Tandem $tandem
     * @return User
     */
    public function setTandem(\AppBundle\Entity\Tandem $tandem = null)
    {
        $this->tandem = $tandem;

        return $this;
    }

    /**
     * Get tandem
     *
     * @return \AppBundle\Entity\Tandem 
     */
    public function getTandem()
    {
        return $this->tandem;
    }
}
