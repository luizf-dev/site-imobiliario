<?php

session_start();

require_once './vendor/autoload.php';


//= arquivo .env para variaveis de ambiente
//use Dotenv\Dotenv;

//= Namespace
use App\Helpers\Route;


//= Carrega o arquivo .env com as variáveis de ambiente
//$dotenv = Dotenv::createImmutable(__DIR__);
//$dotenv->load();

//  Agora todas as variáveis estão acessíveis com $_ENV['NOME']


//= Instancia da classe Route
$route = new Route();