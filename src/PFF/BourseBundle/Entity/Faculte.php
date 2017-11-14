<?php

namespace PFF\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PFF\BourseBundle\Entity\FaculteRepository")
 */
class Faculte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     *
     * @ORM\ManyToOne(targetEntity="PFF\BourseBundle\Entity\Universite",inversedBy="faculte")
     * @ORM\JoinColumn(nullable=true)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeFac", type="string", length=10)
     */
    private $codeFac;

    /**
     * @var string
     *
     * @ORM\Column(name="NomFac", type="string", length=50)
     */
    private $nomFac;


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
     * Set nomFac
     *
     * @param string $nomFac
     * @return Faculte
     */
    public function setNomFac($nomFac)
    {
        $this->nomFac = $nomFac;

        return $this;
    }

    /**
     * Get nomFac
     *
     * @return string 
     */
    public function getNomFac()
    {
        return $this->nomFac;
    }

    /**
     * Set universite
     *
     * @param \PFF\BourseBundle\Entity\Universite $universite
     * @return Faculte
     */
    public function setUniversite(\PFF\BourseBundle\Entity\Universite $universite = null)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return \PFF\BourseBundle\Entity\Universite 
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set codeFac
     *
     * @param string $codeFac
     *
     * @return Faculte
     */
    public function setCodeFac($codeFac)
    {
        $this->codeFac = $codeFac;

        return $this;
    }

    /**
     * Get codeFac
     *
     * @return string
     */
    public function getCodeFac()
    {
        return $this->codeFac;
    }

    public function __toString(){
        return $this->codeFac;
    }
}
