<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Produit;
use App\Model\ProduitModel;
use App\Model\Famille_produitModel;
use core\Database\Database;

class ProduitController extends DefaultController{

    public function __construct()
    {
        $this->db = new Database;
    }

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

    public function delete($id)
    {
        $model = new ProduitModel();
        $produit = $model->deleteById($id);

        return $this->redirectToRoute("getProduits");
    }

    public function create($data)
    {
        if (!empty($data)) {

            var_dump($data);
            $produit = new Produit($data);
            var_dump($produit);
            $today = date("Y-m-d H:i:s");     
            $produit->setIdUtilisateur(1);
            $produit->setDatePublier($today);
            
            $statement = "INSERT INTO Produit (Nom_produit, Quantite_produit, Poids_produit, Type_produit, Prix_produit, Description_produit, Marque_produit, Origine_produit, Date_publier, Id_familleproduit, Id_utilisateur) 
            VALUES (:Nom_produit, :Quantite_produit, :Poids_produit, :Type_produit, :Prix_produit, :Description_produit, :Marque_produit, :Origine_produit, :Date_publier, :Id_familleproduit, :Id_utilisateur)";
            
            $prep = $this->db->getPDO()->prepare($statement);
            $prep->bindValue(':Nom_produit', $produit->getNomProduit());
            $prep->bindValue(':Quantite_produit', $produit->getQuantiteProduit());
            $prep->bindValue(':Poids_produit', $produit->getPoidsProduit());
            $prep->bindValue(':Type_produit', $produit->getTypeProduit());
            $prep->bindValue(':Prix_produit', $produit->getPrixProduit());
            $prep->bindValue(':Description_produit', $produit->getDescriptionProduit());
            $prep->bindValue(':Marque_produit', $produit->getMarqueProduit());
            $prep->bindValue(':Origine_produit', $produit->getOrigineProduit());
            $prep->bindValue(':Date_publier', $produit->getDatePublier());
            $prep->bindValue(':Id_familleproduit', $produit->getIdFamilleproduit());
            $prep->bindValue(':Id_utilisateur', $produit->getIdUtilisateur());
            
            $prep->execute();
            
            return $this->redirectToRoute("getProduits");
        } else {
            $familleModel = new Famille_produitModel();
            $familles = $familleModel->findAll();
            $this->render("produit/create", [
                "familles" => $familles
            ]);
        }
    }

}