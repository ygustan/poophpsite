<?php
namespace App\Controller;

abstract class DefaultController{

    public function render($path, $attributes = [])
    {
        ob_start();
        extract($attributes);
        include ROOT . "templates/$path.php";
        $content = ob_get_clean();
        include ROOT . "templates/base.php";
    }

    public function redirectToRoute($name, $listParams = [])
    {
        $param = "";

        foreach($listParams as $key => $value){
            $param .= "&$key=$value";
        }


        header("location: public/index.php?page=$name".$param);
    }
}