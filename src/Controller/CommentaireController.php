<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Commentaire;
use App\Model\CommentaireModel;


class CommentaireController extends DefaultController{

    public function index()
    {
        $model = new CommentaireModel();
        $commentaires = $model->findAll();

        $this->render("article/index", [
            "commentaires" => $commentaires
        ]);
    }

    public function single($id)
    {
        $model = new CommentaireModel();
        $commentaire = $model->findById($id);

        $this->render("article/single", [
            "commentaire" => $commentaire
        ]);
    }
}