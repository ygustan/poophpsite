<?php
namespace core\Interfaces;

interface InterfaceModel{

    public function findAll();
    public function findById(int $id);
    public function deleteById(int $id);

}