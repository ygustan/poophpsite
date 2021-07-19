<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class Animaux extends DefaultEntity{

    private $Id_animal;
    private $Nom_animal;
    private $Age;
    private $Poids_animal;
    private $Type_animal;
    private $prix;
    private $Description_animal;
    private $Origine_animal;
    private $Date_naissance;
    private $Date_adoption;
    private $Adopter;



    /**
     * Get the value of Id_animal
     */
    public function getId_animal()
    {
        return $this->Id_animal;
    }

    
    /**
     * Get the value of Nom_animal
     */
    public function getNomAnimal()
    {
        return $this->Nom_animal;
    }

    /**
     * Set the value of Nom_animal
     */
    public function setnomAnimal($Nom_animal): self
    {
        $this->Nom_animal = $Nom_animal;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->Age = $age;

        return $this;
    }

    /**
     * Get the value of Poids_animal
     */
    public function getPoids_animal()
    {
        return $this->Poids_animal;
    }

    /**
     * Set the value of Poids_animal
     */
    public function setPoids_animal($Poids_animal): self
    {
        $this->Poids_animal = $Poids_animal;

        return $this;
    }

    /**
     * Get the value of Type_animal
     */
    public function getType_animal()
    {
        return $this->Type_animal;
    }

    /**
     * Set the value of Type_animal
     */
    public function setType_animal($Type_animal): self
    {
        $this->Type_animal = $Type_animal;

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
     * Get the value of Description_animal
     */
    public function getDescription_animal()
    {
        return $this->Description_animal;
    }

    /**
     * Set the value of Description_animal
     */
    public function setDescription_animal($Description_animal): self
    {
        $this->Description_animal = $Description_animal;

        return $this;
    }

    /**
     * Get the value of Origine_animal
     */
    public function getOrigine_animal()
    {
        return $this->Origine_animal;
    }

    /**
     * Set the value of Origine_animal
     */
    public function setOrigine_animal($Origine_animal): self
    {
        $this->Origine_animal = $Origine_animal;

        return $this;
    }

    /**
     * Get the value of Date_naissance
     */
    public function getDate_naissance()
    {
        return $this->Date_naissance;
    }

    /**
     * Set the value of Date_naissance
     */
    public function setDate_naissance($Date_naissance): self
    {
        $this->Date_naissance = $Date_naissance;

        return $this;
    }

    /**
     * Get the value of Date_adoption
     */
    public function getDate_adoption()
    {
        return $this->Date_adoption;
    }

    /**
     * Set the value of Date_adoption
     */
    public function setDate_adoption($Date_adoption): self
    {
        $this->Date_adoption = $Date_adoption;

        return $this;
    }

    /**
     * Get the value of Adopter
     */
    public function getAdopter()
    {
        return $this->Adopter;
    }

    /**
     * Set the value of Adopter
     */
    public function setAdopter($Adopter): self
    {
        $this->Adopter = $Adopter;

        return $this;
    }
}