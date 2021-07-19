<?php

namespace App\Model;
use core\Defaut\DefaultModel;

/**
 * @method Animaux|array findAll()
 * @method Animaux find($id)
 */
class AnimauxModel extends DefaultModel{

    protected $table = "animaux";
    protected $idName = "Id_animal";

}