<?php
namespace App\Entity;
use App\Entity\DefaultEntity;

class Produit extends DefaultEntity{

    private $Id_produit;
    private $Nom_produit;
    private $Quantite_produit;
    private $Poids_produit;
    private $Type_produit;
    private $Prix_produit;
    private $Description_produit;
    private $Marque_produit;
    private $Origine_produit;
    private $Date_publier;
    private $Id_familleproduit;
    private $Id_utilisateur;

    /**
     * Get the value of Id_produit
     */
    public function getIdProduit()
    {
        return $this->Id_produit;
    }

    /**
     * Get the value of Nom_produit
     */
    public function getNomProduit()
    {
        return $this->Nom_produit;
    }

    /**
     * Set the value of Nom_produit
     */
    public function setNomProduit($Nom_produit): self
    {
        $this->Nom_produit = $Nom_produit;

        return $this;
    }

    /**
     * Get the value of Quantite_produit
     */
    public function getQuantiteProduit()
    {
        return $this->Quantite_produit;
    }

    /**
     * Set the value of Quantite_produit
     */
    public function setQuantiteProduit($Quantite_produit): self
    {
        $this->Quantite_produit = $Quantite_produit;

        return $this;
    }

    /**
     * Get the value of Poids_produit
     */
    public function getPoidsProduit()
    {
        return $this->Poids_produit;
    }

    /**
     * Set the value of Poids_produit
     */
    public function setPoidsProduit($Poids_produit): self
    {
        $this->Poids_produit = $Poids_produit;

        return $this;
    }

    /**
     * Get the value of Type_produit
     */
    public function getTypeProduit()
    {
        return $this->Type_produit;
    }

    /**
     * Set the value of Type_produit
     */
    public function setTypeProduit($Type_produit): self
    {
        $this->Type_produit = $Type_produit;

        return $this;
    }

    /**
     * Get the value of Prix_produit
     */
    public function getPrixProduit()
    {
        return $this->Prix_produit;
    }

    /**
     * Set the value of Prix_produit
     */
    public function setPrixProduit($Prix_produit): self
    {
        $this->Prix_produit = $Prix_produit;

        return $this;
    }

    /**
     * Get the value of Description_produit
     */
    public function getDescriptionProduit()
    {
        return $this->Description_produit;
    }

    /**
     * Set the value of Description_produit
     */
    public function setDescriptionProduit($Description_produit): self
    {
        $this->Description_produit = $Description_produit;

        return $this;
    }

    /**
     * Get the value of Marque_produit
     */
    public function getMarqueProduit()
    {
        return $this->Marque_produit;
    }

    /**
     * Set the value of Marque_produit
     */
    public function setMarqueProduit($Marque_produit): self
    {
        $this->Marque_produit = $Marque_produit;

        return $this;
    }

    /**
     * Get the value of Origine_produit
     */
    public function getOrigineProduit()
    {
        return $this->Origine_produit;
    }

    /**
     * Set the value of Origine_produit
     */
    public function setOrigineProduit($Origine_produit): self
    {
        $this->Origine_produit = $Origine_produit;

        return $this;
    }

    /**
     * Get the value of Date_publier
     */
    public function getDatePublier()
    {
        return $this->Date_publier;
    }

    /**
     * Set the value of Date_publier
     */
    public function setDatePublier($Date_publier): self
    {
        $this->Date_publier = $Date_publier;

        return $this;
    }

    /**
     * Get the value of Id_familleproduit
     */
    public function getIdFamilleproduit()
    {
        return $this->Id_familleproduit;
    }

    /**
     * Set the value of Id_familleproduit
     */
    public function setIdFamilleproduit($Id_familleproduit): self
    {
        $this->Id_familleproduit = $Id_familleproduit;

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