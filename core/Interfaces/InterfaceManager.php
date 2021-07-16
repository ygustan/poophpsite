<?php
namespace core\Interfaces;

interface InterfaceManager{

    public function getAll();
    public function get(int $id);
    public function save();
    public function update(int $id);
    public function delete(int $id);

}