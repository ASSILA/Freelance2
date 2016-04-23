<?php

namespace Freelancer\MainBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Freelancer")
 * @UniqueEntity(fields = "username", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.email.already_used")
 */
class Freelancer extends User {
    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;
    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=true)
     */
    private $solde;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", nullable=true)
     */
    private $adresse;

    /**
     * Set note
     *
     * @param float $note
     * @return Freelancer
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Set solde
     *
     * @param float $solde
     * @return Freelancer
     */
    public function setSolde($solde) {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float 
     */
    public function getSolde() {
        return $this->solde;
    }

    /**
     * Get id
     *
     * @return \Freelancer\MainBundle\Entity\Users 
     */
    public function getId() {
        return $this->id;
    }


    public function __construct() {
         parent::__construct();
         $this->roles = array('ROLE_FREELANCER');
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

}
