<?php

namespace Freelancer\MainBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Jobowner")
 * @UniqueEntity(fields = "username", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.email.already_used")
 */
class Jobowner extends User {

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
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     */
    private $Entreprise;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float", precision=10, scale=0, nullable=false)
     */
    private $solde;

    /**
     * Set solde
     *
     * @param float $solde
     * @return Jobowner
     */
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getEntreprise() {
        return $this->Entreprise;
    }

    function getSolde() {
        return $this->solde;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setEntreprise($Entreprise) {
        $this->Entreprise = $Entreprise;
    }

    function setSolde($solde) {
        $this->solde = $solde;
    }


    public function __construct() {
         parent::__construct();
         $this->roles = array('ROLE_JOBOWNER');
         $this->setSolde(0);
    }
}
