<?php

namespace PFF\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PFF\BourseBundle\Entity\UniversiteRepository")
 */
class Universite
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
     * @ORM\OneToMany(targetEntity="PFF\BourseBundle\Entity\Faculte",mappedBy="universte")
     * @ORM\JoinColumn(nullable=true)
     */
    private $faculte;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeUniv", type="string", length=10)
     */
    private $codeUniv;

    /**
     * @var string
     *
     * @ORM\Column(name="NomUniv", type="string", length=50)
     */
    private $nomUniv;


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
     * Set nomUniv
     *
     * @param string $nomUniv
     * @return Universite
     */
    public function setNomUniv($nomUniv)
    {
        $this->nomUniv = $nomUniv;

        return $this;
    }

    /**
     * Get nomUniv
     *
     * @return string 
     */
    public function getNomUniv()
    {
        return $this->nomUniv;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->faculte = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add faculte
     *
     * @param \PFF\BourseBundle\Entity\Faculte $faculte
     * @return Universite
     */
    public function addFaculte(\PFF\BourseBundle\Entity\Faculte $faculte)
    {
        $this->faculte[] = $faculte;

        return $this;
    }

    /**
     * Remove faculte
     *
     * @param \PFF\BourseBundle\Entity\Faculte $faculte
     */
    public function removeFaculte(\PFF\BourseBundle\Entity\Faculte $faculte)
    {
        $this->faculte->removeElement($faculte);
    }

    /**
     * Get faculte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaculte()
    {
        return $this->faculte;
    }

    /**
     * Set codeUniv
     *
     * @param string $codeUniv
     *
     * @return Universite
     */
    public function setCodeUniv($codeUniv)
    {
        $this->codeUniv = $codeUniv;

        return $this;
    }

    /**
     * Get codeUniv
     *
     * @return string
     */
    public function getCodeUniv()
    {
        return $this->codeUniv;
    }

    public function __toString(){
        return $this->CodeUniv;
    }
}
