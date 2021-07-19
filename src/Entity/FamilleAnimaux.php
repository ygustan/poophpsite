<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class FamilleAnimaux  extends DefaultEntity{

    private $Id_familleAnimaux;
    private $nomFamileAnimaux;

    /**
     * Get the value of Id_familleAnimaux
     */
    public function getIdFamilleAnimaux()
    {
        return $this->Id_familleAnimaux;
    }

    /**
     * Get the value of nomFamileAnimaux
     */
    public function getNomFamileAnimaux()
    {
        return $this->nomFamileAnimaux;
    }

    /**
     * Set the value of nomFamileAnimaux
     */
    public function setNomFamileAnimaux($nomFamileAnimaux): self
    {
        $this->nomFamileAnimaux = $nomFamileAnimaux;

        return $this;
    }
}