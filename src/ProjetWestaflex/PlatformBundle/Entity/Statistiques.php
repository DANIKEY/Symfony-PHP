<?php

namespace ProjetWestaflex\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiques
 *
 * @ORM\Table(name="statistiques")
 * @ORM\Entity(repositoryClass="ProjetWestaflex\PlatformBundle\Repository\StatistiquesRepository")
 */
class Statistiques
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
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="tuyaux_defectueux", type="integer")
     */
    private $tuyauxDefectueux;

    /**
     * @var int
     *
     * @ORM\Column(name="tuyaux_non_defectueux", type="integer")
     */
    private $tuyauxNonDefectueux;


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
     * @return Statistiques
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Statistiques
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

    /**
     * Set tuyauxDefectueux
     *
     * @param integer $tuyauxDefectueux
     *
     * @return Statistiques
     */
    public function setTuyauxDefectueux($tuyauxDefectueux)
    {
        $this->tuyauxDefectueux = $tuyauxDefectueux;

        return $this;
    }

    /**
     * Get tuyauxDefectueux
     *
     * @return int
     */
    public function getTuyauxDefectueux()
    {
        return $this->tuyauxDefectueux;
    }

    /**
     * Set tuyauxNonDefectueux
     *
     * @param integer $tuyauxNonDefectueux
     *
     * @return Statistiques
     */
    public function setTuyauxNonDefectueux($tuyauxNonDefectueux)
    {
        $this->tuyauxNonDefectueux = $tuyauxNonDefectueux;

        return $this;
    }

    /**
     * Get tuyauxNonDefectueux
     *
     * @return int
     */
    public function getTuyauxNonDefectueux()
    {
        return $this->tuyauxNonDefectueux;
    }
}

