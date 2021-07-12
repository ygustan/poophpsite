<?php
// require_once "Famille.php";
namespace Classes\Produits;
use Classes\Produits\Famille;

class Produit extends Famille{

    private $id;
    private $nomProduit;
    private $poids;
    private $type;
    private $prix;
    private $description;
    private $marque;
    private $provenance;
    private $quantite;
    private $date;

    public function __construct(){

        $this->nomProduit = "Defaut";
        $this->poids = 0;
        $this->type = "Normal";
        $this->prix = 0.00;
        $this->description = "Description par defaut";
        $this->marque = "";
        $this->provenance = "";
        $this->quantite = 0;
    }


    /**
     * Get the value of nomProduit
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /**
     * Set the value of nomProduit
     */
    public function setNomProduit($nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get the value of poids
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     */
    public function setPoids($poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque($marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of provenance
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Set the value of provenance
     */
    public function setProvenance($provenance): self
    {
        $this->provenance = $provenance;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     */
    public function setQuantite($quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}