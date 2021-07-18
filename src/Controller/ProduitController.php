<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Produit;
use App\Model\ProduitModel;


class ProduitController extends DefaultController{

    public function index()
    {
        $model = new ProduitModel();
        $produits = $model->findAll();

        $this->render("produit/index", [
            "produits" => $produits
        ]);
    }

    public function single($id)
    {
        $model = new ProduitModel();
        $produit = $model->findById($id);

        $this->render("produit/single", [
            "produit" => $produit
        ]);
    }
}