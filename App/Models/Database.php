<?php

namespace App\Models;
use PDO;

class Database{

    //!Atributo que receberá a conexão com a base de dados através do método getDatabase, que é um método da classe Connection, que de fato faz a conexão com a base de dados
    protected $database;

    public function __construct(PDO $database) {

        $this->database = $database;
        
    }
    
}