<?php

namespace ProjetWestaflex\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SelectionProcedure
 *
 * @ORM\Table(name="selection_procedure")
 * @ORM\Entity(repositoryClass="ProjetWestaflex\PlatformBundle\Repository\SelectionProcedureRepository")
 */
class SelectionProcedure
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
     * @var int
     *
     * @ORM\Column(name="id_procedure", type="integer")
     */
    private $idProcedure;


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
     * Set idProcedure
     *
     * @param integer $idProcedure
     *
     * @return SelectionProcedure
     */
    public function setIdProcedure($idProcedure)
    {
        $this->idProcedure = $idProcedure;

        return $this;
    }

    /**
     * Get idProcedure
     *
     * @return int
     */
    public function getIdProcedure()
    {
        return $this->idProcedure;
    }
}

