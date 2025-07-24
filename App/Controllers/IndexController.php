<?php

//*Nessa classe IndexController em cada método é instanciada a classe $renderPage,
//* e passado o parametro true para header e footer quando necessário,
//* fazendo um merge dos layouts, assim fica mais dinamico e flexivel a renderização das views

namespace App\Controllers;

use App\Helpers\Connection;
use App\Helpers\Page;
use App\Helpers\Mensagens;

class IndexController{      

    
    public function index(){

        /*$senhaDigitada = '1314';

        // Hash correspondente à senha '123', gerado com password_hash
        $hashSalvoNoBanco = password_hash($senhaDigitada, PASSWORD_DEFAULT);

        // Verificando se a senha está correta
        if (password_verify($senhaDigitada, $hashSalvoNoBanco)) {
            echo "Senha correta!<br>" . $hashSalvoNoBanco;
        } else {
            echo "Senha incorreta!";
        }

       //echo password_hash('123', PASSWORD_DEFAULT); */



        $page = new Page(); 
        $page->renderPage('index', true, true);        

        
    } 
}