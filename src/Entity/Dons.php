<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class Dons extends DefaultEntity{

    private $Id_dons;
    private $Montant;
    private $Id_utilisateur;


    /**
     * Get the value of Id_dons
     */
    public function getIdDons()
    {
        return $this->Id_dons;
    }

    /**
     * Get the value of Montant
     */
    public function getMontant()
    {
        return $this->Montant;
    }

    /**
     * Set the value of Montant
     */
    public function setMontant($Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    /**
     * Get the value of Id_utilisateur
     */
    public function getIdUtilisateur()
    {
        return $this->Id_utilisateur;
    }

    /**
     * Set the value of Id_utilisateur
     */
    public function setIdUtilisateur($Id_utilisateur): self
    {
        $this->Id_utilisateur = $Id_utilisateur;

        return $this;
    }
}