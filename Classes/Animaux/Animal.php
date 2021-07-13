<?php
// require_once "Famille.php";
namespace Classes\Animaux;
use Classes\Animaux\FamilleAnimaux;

class Animal extends FamilleAnimaux{

    private $id;
    private $nomAnimal;
    private $age;
    private $poids;
    private $type;
    private $prix;
    private $description;
    private $provenance;
    private $dateNaissance;
    private $dateAdoption;

    public function __construct(){

        $this->nomAnimal = "Defaut";
        $this->age = 0;
        $this->poids = 0;
        $this->type = "Defaut";
        $this->prix = 0.00;
        $this->description = "Description par defaut";
        $this->provenance = "";
        $this->dateNaissance = "01/01/2020";
        $this->dateAdoption = "01/01/2020";
    }


    /**
     * Get the value of nomAnimal
     */
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }

    /**
     * Set the value of nomAnimal
     */
    public function setNomAnimal($nomAnimal): self
    {
        $this->nomAnimal = $nomAnimal;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

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
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     */
    public function setDateNaissance($dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of dateAdoption
     */
    public function getDateAdoption()
    {
        return $this->dateAdoption;
    }

    /**
     * Set the value of dateAdoption
     */
    public function setDateAdoption($dateAdoption): self
    {
        $this->dateAdoption = $dateAdoption;

        return $this;
    }
}