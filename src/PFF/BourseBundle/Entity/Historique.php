<?php

namespace PFF\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PFF\BourseBundle\Entity\HistoriqueRepository")
 */
class Historique
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
     * @ORM\ManyToOne(targetEntity="PFF\BourseBundle\Entity\Beneficiaire",
     inversedBy="historiques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $beneficiaire;

    /**
     * @ORM\ManyToOne(targetEntity="PFF\BourseBundle\Entity\Fonds",
     inversedBy="historiques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fonds;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Historique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set beneficiaire
     *
     * @param \PFF\BourseBundle\Entity\Beneficiaire $beneficiaire
     *
     * @return Historique
     */
    public function setBeneficiaire(\PFF\BourseBundle\Entity\Beneficiaire $beneficiaire)
    {
        $this->beneficiaire = $beneficiaire;

        return $this;
    }

    /**
     * Get beneficiaire
     *
     * @return \PFF\BourseBundle\Entity\Beneficiaire
     */
    public function getBeneficiaire()
    {
        return $this->beneficiaire;
    }

    /**
     * Set fonds
     *
     * @param \PFF\BourseBundle\Entity\Fonds $fonds
     *
     * @return Historique
     */
    public function setFonds(\PFF\BourseBundle\Entity\Fonds $fonds)
    {
        $this->fonds = $fonds;

        return $this;
    }

    /**
     * Get fonds
     *
     * @return \PFF\BourseBundle\Entity\Fonds
     */
    public function getFonds()
    {
        return $this->fonds;
    }
}
