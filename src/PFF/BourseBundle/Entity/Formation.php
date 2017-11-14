<?php

namespace PFF\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PFF\BourseBundle\Entity\FormationRepository")
 */
class Formation
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
     * @ORM\ManyToOne(targetEntity="PFF\BourseBundle\Entity\Beneficiaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Beneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Diplome", type="string", length=30)
     */
    private $diplome;

    /**
     * @var integer
     *
     * @ORM\Column(name="DateDebut", type="integer")
     */
    private $dateDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="DateFin", type="integer")
     */
    private $dateFin;

    /**
     * @var float
     *
     * @ORM\Column(name="MontF", type="float")
     */
    private $montF;

    /**
     * @var string
     *
     * @ORM\Column(name="LieuF", type="string", length=40)
     */
    private $lieuF;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialite", type="string", length=30)
     */
    private $specialite;


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
     * Set diplome
     *
     * @param string $diplome
     * @return Formation
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set dateDebut
     *
     * @param integer $dateDebut
     * @return Formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return integer 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param integer $dateFin
     * @return Formation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return integer 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set montF
     *
     * @param float $montF
     * @return Formation
     */
    public function setMontF($montF)
    {
        $this->montF = $montF;

        return $this;
    }

    /**
     * Get montF
     *
     * @return float 
     */
    public function getMontF()
    {
        return $this->montF;
    }

    /**
     * Set lieuF
     *
     * @param string $lieuF
     * @return Formation
     */
    public function setLieuF($lieuF)
    {
        $this->lieuF = $lieuF;

        return $this;
    }

    /**
     * Get lieuF
     *
     * @return string 
     */
    public function getLieuF()
    {
        return $this->lieuF;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return Formation
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set beneficiaire
     *
     * @param \PFF\BourseBundle\Entity\Beneficiaire $beneficiaire
     *
     * @return Formation
     */
    public function setBeneficiaire(\PFF\BourseBundle\Entity\Beneficiaire $beneficiaire)
    {
        $this->Beneficiaire = $beneficiaire;

        return $this;
    }

    /**
     * Get beneficiaire
     *
     * @return \PFF\BourseBundle\Entity\Beneficiaire
     */
    public function getBeneficiaire()
    {
        return $this->Beneficiaire;
    }
}
