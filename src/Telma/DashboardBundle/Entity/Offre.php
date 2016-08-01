<?php

namespace Telma\DashboardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="telma_offre")
 * @ORM\Entity(repositoryClass="Telma\DashboardBundle\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOffre", type="string", length=255)
     */
    private $nomOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="debitMax", type="integer")
     */
    private $debitMax;

    /**
     * @var int
     *
     * @ORM\Column(name="debitMin", type="integer")
     */
    private $debitMin;

    /**
     * @var int
     *
     * @ORM\Column(name="debitAct", type="integer", nullable=true)
     */
    private $debitAct;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomOffre
     *
     * @param string $nomOffre
     *
     * @return Offre
     */
    public function setNomOffre($nomOffre)
    {
        $this->nomOffre = $nomOffre;

        return $this;
    }

    /**
     * Get nomOffre
     *
     * @return string
     */
    public function getNomOffre()
    {
        return $this->nomOffre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Offre
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
     * Set debitMax
     *
     * @param integer $debitMax
     *
     * @return Offre
     */
    public function setDebitMax($debitMax)
    {
        $this->debitMax = $debitMax;

        return $this;
    }

    /**
     * Get debitMax
     *
     * @return int
     */
    public function getDebitMax()
    {
        return $this->debitMax;
    }

    /**
     * Set debitMin
     *
     * @param integer $debitMin
     *
     * @return Offre
     */
    public function setDebitMin($debitMin)
    {
        $this->debitMin = $debitMin;

        return $this;
    }

    /**
     * Get debitMin
     *
     * @return int
     */
    public function getDebitMin()
    {
        return $this->debitMin;
    }

    /**
     * Set debitAct
     *
     * @param integer $debitAct
     *
     * @return Offre
     */
    public function setDebitAct($debitAct)
    {
        $this->debitAct = $debitAct;

        return $this;
    }

    /**
     * Get debitAct
     *
     * @return int
     */
    public function getDebitAct()
    {
        return $this->debitAct;
    }
}

