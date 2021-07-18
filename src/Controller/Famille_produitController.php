<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Famille_produit;
use App\Model\Famille_produitModel;


class Famille_produitController extends DefaultController{

    public function index()
    {
        $model = new Famille_produitModel();
        $familleProduits = $model->findAll();

        $this->render("article/index", [
            "familleProduits" => $familleProduits
        ]);
    }

    public function single($id)
    {
        $model = new Famille_produitModel();
        $familleProduit = $model->findById($id);

        $this->render("article/single", [
            "familleProduit" => $familleProduit
        ]);
    }
}