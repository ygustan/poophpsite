<?php
namespace Classes\Animaux;

class FamilleAnimauxe {
    protected $nomFamileAnimaux;
    private $quantiteProduit;

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