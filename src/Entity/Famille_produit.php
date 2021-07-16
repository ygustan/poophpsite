<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class Famille_produit extends DefaultEntity{

    private $Id_familleproduit;
    private $Nom_familleproduit;


    /**
     * Get the value of Id_familleproduit
     */
    public function getIdFamilleproduit()
    {
        return $this->Id_familleproduit;
    }

    /**
     * Get the value of Nom_familleproduit
     */
    public function getNomFamilleproduit()
    {
        return $this->Nom_familleproduit;
    }

    /**
     * Set the value of Nom_familleproduit
     */
    public function setNomFamilleproduit($Nom_familleproduit): self
    {
        $this->Nom_familleproduit = $Nom_familleproduit;

        return $this;
    }
}