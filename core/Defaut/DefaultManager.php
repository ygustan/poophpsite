<?php
namespace core\Defaut;

abstract class DefaultManager{

    public function render($path, $attributes = [])
    {
        ob_start();
        extract($attributes);
        include ROOT . "templates/$path.php";
        $content = ob_get_clean();
        include ROOT . "templates/base.php";
    }
}