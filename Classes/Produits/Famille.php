<?php
namespace Classes\Produits;

class Famille {
    protected $nomFamile;
    private $quantiteProduit;

    /**
     * Get the value of nomFamile
     */
    public function getNomFamile()
    {
        return $this->nomFamile;
    }

    /**
     * Set the value of nomFamile
     */
    public function setNomFamile($nomFamile): self
    {
        $this->nomFamile = $nomFamile;

        return $this;
    }
}