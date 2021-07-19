<?php

namespace App\Model;
use core\Defaut\DefaultModel;

/**
 * @method User|array findAll()
 * @method User find($id)
 */
class UserModel extends DefaultModel{

    protected $table = "utilisateur";
    protected $idName = "Id_utilisateur";

}