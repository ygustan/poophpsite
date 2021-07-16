<?php
namespace App\Entity;
use core\Defaut\DefaultEntity;

class Article extends DefaultEntity{

    private $Id_article;
    private $Titre;
    private $Contenu;
    private $Date_article;
    private $Id_utilisateur;
    

    /**
     * Get the value of Id_article
     */
    public function getIdArticle()
    {
        return $this->Id_article;
    }

    /**
     * Get the value of Titre
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set the value of Titre
     */
    public function setTitre($Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    /**
     * Get the value of Contenu
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * Set the value of Contenu
     */
    public function setContenu($Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    /**
     * Get the value of Date_article
     */
    public function getDateArticle()
    {
        return $this->Date_article;
    }

    /**
     * Set the value of Date_article
     */
    public function setDateArticle($Date_article): self
    {
        $this->Date_article = $Date_article;

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