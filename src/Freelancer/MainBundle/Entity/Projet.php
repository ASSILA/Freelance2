<?php

namespace Freelancer\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_in", type="date", nullable=false)
     */
    private $checkIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="check_out", type="date", nullable=false)
     */
    private $checkOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="satus", type="integer", nullable=true)
     */
    private $satus;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrc", type="integer", nullable=true)
     */
    private $nbrc;
    /**
     * @var string
     *
     * @ORM\Column(name="emailFreelancer", type="string", length=50, nullable=true)
     */
    private $emailfreelancer;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;



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
     * Set email
     *
     * @param string $email
     * @return Projet
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Projet
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
     * Set budget
     *
     * @param float $budget
     * @return Projet
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set checkIn
     *
     * @param \DateTime $checkIn
     * @return Projet
     */
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;

        return $this;
    }

    /**
     * Get checkIn
     *
     * @return \DateTime 
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * Set checkOut
     *
     * @param \DateTime $checkOut
     * @return Projet
     */
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;

        return $this;
    }

    /**
     * Get checkOut
     *
     * @return \DateTime 
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * Set satus
     *
     * @param integer $satus
     * @return Projet
     */
    public function setSatus($satus)
    {
        $this->satus = $satus;

        return $this;
    }

    /**
     * Get satus
     *
     * @return integer 
     */
    public function getSatus()
    {
        return $this->satus;
    }
    function getNbrc() {
        return $this->nbrc;
    }

    function setNbrc($nbrc) {
        $this->nbrc = $nbrc;
    }

        /**
     * Set emailfreelancer
     *
     * @param string $emailfreelancer
     * @return Projet
     */
    public function setEmailfreelancer($emailfreelancer)
    {
        $this->emailfreelancer = $emailfreelancer;

        return $this;
    }

    /**
     * Get emailfreelancer
     *
     * @return string 
     */
    public function getEmailfreelancer()
    {
        return $this->emailfreelancer;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
