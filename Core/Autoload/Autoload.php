<?php

class Autoload{

    public static function load($classe){
        $classe = str_replace("\\", "/", $classe);
        require "$classe.php";
    }

    public static function register(){
        spl_autoload_register(['load', __CLASS__]);
    }
}