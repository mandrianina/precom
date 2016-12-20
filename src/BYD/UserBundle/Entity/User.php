<?php

namespace BYD\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="byd_user")
 * @ORM\Entity(repositoryClass="BYD\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    protected $nom;
    
    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    protected $prenom;
    
    /**
     * @ORM\Column(type="string", length=15)
     * 
     */
    protected $choixRole;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set choixRole
     *
     * @param string $choixRole
     *
     * @return User
     */
    public function setChoixRole($choixRole)
    {
        $this->choixRole = $choixRole;

        return $this;
    }

    /**
     * Get choixRole
     *
     * @return string
     */
    public function getChoixRole()
    {
        return $this->choixRole;
    }
}
