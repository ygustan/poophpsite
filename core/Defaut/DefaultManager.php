<?php
namespace core\Defaut;
use core\Interfaces\InterfaceManager;

abstract class DefaultManager implements InterfaceManager{

    public function render($path, $attributes = [])
    {
        ob_start();
        extract($attributes);
        include ROOT . "templates/$path.php";
        $content = ob_get_clean();
        include ROOT . "templates/base.php";
    }
}