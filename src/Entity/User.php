<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class User extends DefaultEntity{

    private $Id_utilisateur;
    private $Nom;
    private $Email;
    private $Motdepasse;
    private $Date_creation;
    private $Est_admin;


    /**
     * Get the value of Id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->Id_utilisateur;
    }

    
    /**
     * Get the value of Nom
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom_user
     */
    public function setnomUser($Nom_user): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     */
    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Motdepasse
     */
    public function getMotdepasse()
    {
        return $this->Motdepasse;
    }

    /**
     * Set the value of Motdepasse
     */
    public function setMotdepasse($Motdepasse): self
    {
        $this->Motdepasse = $Motdepasse;

        return $this;
    }

    /**
     * Get the value of Date_creation
     */
    public function getDate_creation()
    {
        return $this->Date_creation;
    }

    /**
     * Set the value of Date_creation
     */
    public function setDate_creation($Date_creation): self
    {
        $this->Date_creation = $Date_creation;

        return $this;
    }

    /**
     * Get the value of Est_admin
     */
    public function getEst_admin()
    {
        return $this->Est_admin;
    }

    /**
     * Set the value of Est_admin
     */
    public function setEst_admin($Est_admin): self
    {
        $this->Est_admin = $Est_admin;

        return $this;
    }
}