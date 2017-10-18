<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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

    /**
     * @ORM\Column(type="string")
     */
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
     * @var \AppBundle\Entity\Tandem
     */
    private $user1;

    /**
     * @var \AppBundle\Entity\Tandem
     */
    private $user2;


    /**
     * Set user1
     *
     * @param \AppBundle\Entity\Tandem $user1
     * @return User
     */
    public function setUser1(\AppBundle\Entity\Tandem $user1 = null)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return \AppBundle\Entity\Tandem 
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set user2
     *
     * @param \AppBundle\Entity\Tandem $user2
     * @return User
     */
    public function setUser2(\AppBundle\Entity\Tandem $user2 = null)
    {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return \AppBundle\Entity\Tandem 
     */
    public function getUser2()
    {
        return $this->user2;
    }
}
