<?php
namespace core\Database;

class Database {

    private $host;
    private $dbname;
    private $user;
    private $pwd;
    private $port;
    private $pdo;


    public function __construct(){

        try {
            $this->getConfig();
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->port", $this->user, $this->pwd, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

    }

    private function getConfig(){
        require ROOT . "config/config.php";
        foreach($config as $key => $value){
            $this->$key = $value;
        }
    }

    public function getPDO(){
        return $this->pdo;
    }

    public function getData(string $statement, $classe, $one = false){
        $query = $this->pdo->query($statement, \PDO::FETCH_CLASS, "App\Entity\\".$classe);

        $data = "";
        if($one){
            $data = $query->fetch();
        } else {
            $data = $query->fetchAll();
        }

        return $data;
    }

    public function prepareData(string $statement, array $data= array()){
        try {
            $prepare = $this->pdo->prepare($statement);

            return $prepare->execute($data);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
}