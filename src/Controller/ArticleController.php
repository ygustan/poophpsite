<?php
namespace App\Controller;
use core\Defaut\DefaultController;
use App\Entity\Article;
use App\Model\ArticleModel;


class ArticleController extends DefaultController{

    public function index()
    {
        $model = new ArticleModel();
        $articles = $model->findAll();

        $this->render("article/index", [
            "articles" => $articles
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