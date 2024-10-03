<?php

namespace Application\Lib\Database;

class DataBaseConnection {
    private static ?self $instance = null;
    private ?\PDO $database = null ;

    private function __construct(){}

    public static function getInstance() : self{
        if(self::$instance == null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection() : \PDO {
        if($this->database === null){
            try{
                $this->database = new \PDO('mysql:host=mysql-brisset-theo.alwaysdata.net;port=3306;dbname=brisset-theo_pokemon;charset=utf8', '343614_brisset',  'fcad2024!');
            } catch (\PDOException  $e){
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
                
        }

        return $this->database ;
    }

    private function __clone(){}
}

$connection = DataBaseConnection::getInstance()->getConnection();