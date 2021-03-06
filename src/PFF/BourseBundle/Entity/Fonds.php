<?php

namespace PFF\BourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonds
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PFF\BourseBundle\Entity\FondsRepository")
 */
class Fonds
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
     * @ORM\OneToMany(targetEntity="PFF\BourseBundle\Entity\Historique",
     mappedBy="fonds")
    */
    private $historiques;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float")
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=15)
     */
    private $type;


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
     * Set montant
     *
     * @param float $montant
     * @return Fonds
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Fonds
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Fonds
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add historique
     *
     * @param \PFF\BourseBundle\Entity\Historique $historique
     *
     * @return Fonds
     */
    public function addHistorique(\PFF\BourseBundle\Entity\Historique $historique)
    {
        $this->historiques[] = $historique;

        return $this;
    }

    /**
     * Remove historique
     *
     * @param \PFF\BourseBundle\Entity\Historique $historique
     */
    public function removeHistorique(\PFF\BourseBundle\Entity\Historique $historique)
    {
        $this->historiques->removeElement($historique);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }

    public function __toString()
    {
        return sprintf("%s | %s | %s", $this->type, $this->montant, $this->annee);
    }
}


