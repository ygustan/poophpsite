<?php
namespace core\Defaut;

use core\Database\Database;

class DefaultModel{
    protected $table;
    protected $idName = "";
    protected $className = "";

    public function __construct(){
        $this->db = new Database;
        $this->className = ucfirst($this->table);
    }

    public function findAll(){
        $statement = "SELECT * FROM $this->table";
        return $this->db->getData($statement, $this->className);
    }

    public function findById($id){
        $statement = "SELECT * FROM $this->table WHERE $this->idName = $id";
        return $this->db->getData($statement, $this->className, true);
    }

    public function deleteById($id){
        $statement = "DELETE FROM $this->table WHERE $this->idName = $id";
        return $this->db->prepareData($statement);
    }
}