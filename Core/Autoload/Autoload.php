<?php

class Autoload{

    public static function Autoloader($classe){
        $classe = str_replace("\\", "/", $classe);
        require ROOT. "$classe.php";
    }

    public static function register(){
        spl_autoload_register(['Autoload', "Autoloader"]);
    }
}