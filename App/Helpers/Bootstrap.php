<?php 

//! ESSE ARQUIVO BOOTSTRAP NADA TEM HAVER COM A LIB CSS bootstrap, ESSE TERMO BOOTSTRAP É MUITO UTILIZADO PARA ESTABELECER SCRIPTS DE INICIALIZAÇÃO DAS APLICAÇÕES ESSE ARQUIVO SOMENTE CONTEM OS MÉTODOS E ATRIBUTOS RELATIVOS AO FRAMEWORK 


namespace App\Helpers;

//! Uma classe abstrata é definida de forma análoga a qualquer tipo de classe a direfença é que ela não pode ser instanciada, pode ser somente herdada

abstract class Bootstrap{
    private $routes;   
    
    //!Esse método quando herdado deverá ser implementado na classe filha
    abstract protected function initRoutes(); 

    //!método construtor
    public function __construct(){      

        $this->initRoutes();
        $this->run($this->getUrl()); 
        //print_r($this->getUrl());      
    } 

    //!método get para manipular os atributos
    public function getRoutes(){
        return $this->routes;
    }

    //!método set para manipular os atributos
    public function setRoutes(array $routes){
        $this->routes = $routes;
    }    


    protected function run($url){

        foreach ($this->getRoutes() as $route) {
            // rota exata
            if ($url === $route['route']) {
                $class = "App\\Controllers\\" . $route['controller'];
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
                return;
            }

            // rota com parâmetro
            if (preg_match("#^" . $route['route'] . "/(\d+)$#", $url, $matches)) {
                $class = "App\\Controllers\\" . $route['controller'];
                $controller = new $class;
                $action = $route['action'];
                $controller->$action($matches[1]);
                return;
            }
        }

        // 👉 Se nenhuma rota combinar, redireciona para a home
        header("Location: /");
        exit();
    }
   

    //!Recupera a URL em que o usuário esta navegando
    protected function getUrl(){

        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ;
        
    }
}

