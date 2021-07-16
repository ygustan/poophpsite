<?php
namespace vendor\Autoload;

class Autoload {
    public static function autoloader($classe){
        $classe = str_replace("\\", "/", $classe);
        require ROOT . "$classe.php";
    }

    public static function register(){
        spl_autoload_register(['Autoload', "autoloader"]);
    }
}