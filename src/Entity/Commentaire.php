<?php
namespace App\Entity;
use App\Entity\DefaultEntity;

class Commentaire extends DefaultEntity{

    private $Id_commentaire;
    private $Com_contenu;
    private $Date_com;
    private $Id_article;
    private $Id_utilisateur;

    /**
     * Get the value of Id_commentaire
     */
    public function getIdCommentaire()
    {
        return $this->Id_commentaire;
    }

    /**
     * Get the value of Com_contenu
     */
    public function getComContenu()
    {
        return $this->Com_contenu;
    }

    /**
     * Set the value of Com_contenu
     */
    public function setComContenu($Com_contenu): self
    {
        $this->Com_contenu = $Com_contenu;

        return $this;
    }

    /**
     * Get the value of Date_com
     */
    public function getDateCom()
    {
        return $this->Date_com;
    }

    /**
     * Set the value of Date_com
     */
    public function setDateCom($Date_com): self
    {
        $this->Date_com = $Date_com;

        return $this;
    }

    /**
     * Get the value of Id_article
     */
    public function getIdArticle()
    {
        return $this->Id_article;
    }

    /**
     * Set the value of Id_article
     */
    public function setIdArticle($Id_article): self
    {
        $this->Id_article = $Id_article;

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