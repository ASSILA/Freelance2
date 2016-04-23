<?php

namespace Freelancer\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity
 */
class Cv
{
    /**
     * @var string
     *
     * @ORM\Column(name="cv_email", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=1000, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=1000, nullable=true)
     */
    private $experience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=false)
     */
    private $dateModif;



    /**
     * Get cvEmail
     *
     * @return string 
     */
    public function getCvEmail()
    {
        return $this->cvEmail;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Cv
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set experience
     *
     * @param string $experience
     * @return Cv
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     * @return Cv
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime 
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }
}
