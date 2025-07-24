<?php

//!MÉTODO RENDER
//= O método render faz o require dinamico das views necessarias passando por parametro na variavel $view o nome da view desejada e na variavel $dados os dados a serem recuperados do banco de dados

//!IMPORTANTE
//= Na classe Page() o if verifica se existe dados dinamicos a serem exibidos, se existir extrai as variaveis do array $dados, se nao mantem como um array vazio. Então, na classe Controller, você pode instanciar essa nova classe Renderer e usar o método render() sem a necessidade de passar um valor para $dados se não houver dados dinâmicos a serem exibidos na view para evitar erro de variavel indefinida

namespace App\Helpers;

class Page {  
   

    //= Renderiza o conteúdo da página,recebe os parametros de header e footer setados como true, e um array vazio para dados dinamicos, e aí no controller basta chamar a view no método renderPage, passar false como parametro para nao exibir a barra de navegação e o footer caso nao precise, e passar a variavel para  dados do banco tambem no metodo renderPage para os dados do banco caso exista
    public function renderPage( $view, $showNavbar = true, $showFooter = true, $dados = []){        

      
       
        require_once "./App/Views/header.php";

        if($showNavbar){
            require_once "./App/Views/navbar.php";
        }  
        
        if(!empty($dados)){
            extract($dados);
        } 

        require_once "./App/Views/$view.php";
        
        

        if($showFooter){
            require_once "./App/Views/footer.php";
        }

        require_once "./App/Views/footerConfig.php";       
        
    }  
}
