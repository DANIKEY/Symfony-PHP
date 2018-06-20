<?php

namespace ProjetWestaflex\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config_tube
 *
 * @ORM\Table(name="config_tube")
 * @ORM\Entity(repositoryClass="ProjetWestaflex\PlatformBundle\Repository\Config_tubeRepository")
 */
class Config_tube
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
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="pression", type="integer")
     */
    private $pression;

    /**
     * @var int
     *
     * @ORM\Column(name="marge", type="integer")
     */
    private $marge;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="diametre", type="integer")
     */
    private $diametre;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;


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
     * Set client
     *
     * @param string $client
     *
     * @return Config_tube
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set pression
     *
     * @param integer $pression
     *
     * @return Config_tube
     */
    public function setPression($pression)
    {
        $this->pression = $pression;

        return $this;
    }

    /**
     * Get pression
     *
     * @return int
     */
    public function getPression()
    {
        return $this->pression;
    }

    /**
     * Set marge
     *
     * @param integer $marge
     *
     * @return Config_tube
     */
    public function setMarge($marge)
    {
        $this->marge = $marge;

        return $this;
    }

    /**
     * Get marge
     *
     * @return int
     */
    public function getMarge()
    {
        return $this->marge;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Config_tube
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set diametre
     *
     * @param integer $diametre
     *
     * @return Config_tube
     */
    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;

        return $this;
    }

    /**
     * Get diametre
     *
     * @return int
     */
    public function getDiametre()
    {
        return $this->diametre;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Config_tube
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}

