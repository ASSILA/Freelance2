<?php


namespace Freelancer\MainBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Admin")
 * @UniqueEntity(fields = "username", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Freelancer\MainBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="string", nullable=false)
     */
    private $solde;
   
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
     * @ORM\Column(name="adresse", type="string", nullable=false)
     */
    private $adresse;
   
     /**
     * Get solde
     *
     * @return float 
     */
    function getSolde() {
        return $this->solde;
    }
 /**
     * Set solde
     *
     * @param float solde
     * @return Admin
     */
    function setSolde($solde) {
        $this->solde = $solde;
    }

         public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_SUPER_ADMIN');
        $this->setSolde(5000);
        
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
