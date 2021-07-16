<?php
namespace App\Controller;
use App\Controller\DefaultController;

class ArticleController extends DefaultController{

    public function index()
    {
        $model = new Article();
        $articles = $model->getAll();

        $this->render("article/index", );
    }
}