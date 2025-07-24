<?php

namespace App\Helpers;

use PDO;
use PDOException;

class Connection{
    

    public static function getDatabase(){

        try {
            $connect = new PDO(
                "mysql:host=" . $_ENV['DB_HOST'] .
                ";dbname=" . $_ENV['DB_NAME'], 
			    $_ENV['DB_USER'],
			    $_ENV['DB_PASS']
            );

            return $connect;

        } catch (PDOException $error) {

            //*Tratamento da exceção;
            echo "Erro ao conectar com a base dados: " . $error->getMessage();
        }
    }

    /*
    public static function getDatabase(){

        try {
            $connect = new PDO(
                "mysql:host=" . Connection::HOSTNAME .
                ";dbname=" . Connection::DBNAME, 
			    Connection::USERNAME,
			    Connection::PASSWORD
            );

            return $connect;

        } catch (PDOException $error) {

            Tratamento da exceção;
            echo "Erro ao conectar com a base dados: " . $error->getMessage();
        }
    }*/
    
}