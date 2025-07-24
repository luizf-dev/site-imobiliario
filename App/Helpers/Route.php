<?php

//!ESSE CLASSE COTEM SOMENTE ATRIBUTOS E MÉTODOS RELATIVOS A APLICAÇÃO QUE ESTÁ RODANDO, HERDANDO A LÓGICA DAS ROTAS DA CLASSE BOOTSTRAP, PORTANTO NESSA CLASSE ROUTE DEIXAR SOMENTE AS ROTAS QUE SE REFEREM AO PROJETO EM QUESTÃO, SE USARMOS O FRAMEWORK EM OUTRO PROJETO É AQUI QUE VAMOS ALTERAR AS ROTAS, A LÓGICA VEM TODA DA CLASSE ABSTRATA BOOTSTRAP QUE A CLASSE ROUTE ESTÁ HERDANDO

//!Namespace da classe Route
namespace App\Helpers;

//!Namespace da classe Boostrap
use App\Helpers\Bootstrap;

//!Classe Route que configura as rotas da aplicação
class Route extends Bootstrap {       

    //! Cria um array com as rotas definidas na aplicação, seus indices e  ação que será buscada  pelo classe Controller quando a rota for passada na URL
    protected function initRoutes(){     
        
        $routes['index'] = [
            'route'=> '/',
            'controller'=> 'IndexController',
            'action'=> 'index'
        ];    
        
        $routes['sobre'] = [
            'route'=> '/sobre',
            'controller'=> 'SobreController',
            'action'=> 'sobre'
        ];

        $routes['contato'] = [
            'route'=> '/contato',
            'controller'=> 'ContatoController',
            'action'=> 'contato'
        ];



        
        $this->setRoutes($routes);
    }    
    
}      
      