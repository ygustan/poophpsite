<?php
namespace core\Defaut;

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
        $params = "";

        foreach($listParams as $key => $value){
            $params .= "&$key=$value";
        }
        header("location: public/index.php?page=$name".$params);
    }
}