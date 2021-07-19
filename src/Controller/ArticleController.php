<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Article;
use App\Model\ArticleModel;

use App\Model\AnimauxModel;
use App\Entity\Animaux;


class ArticleController extends DefaultController{

    public function index()
    {
        $model = new ArticleModel();
        $articles = $model->findAll();

        $model_aninaux = new AnimauxModel;
        $animaux = $model_aninaux->findAll();

        $this->render("article/index", [
            "articles" => $articles,
            "animaux" => $animaux
        ]);
    }

    public function single($id)
    {
        $model = new ArticleModel();
        $article = $model->findById($id);

        $this->render("article/single", [
            "article" => $article
        ]);
    }
}