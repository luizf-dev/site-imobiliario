<?php

//*Nessa classe IndexController em cada método é instanciada a classe $renderPage,
//* e passado o parametro true para header e footer quando necessário,
//* fazendo um merge dos layouts, assim fica mais dinamico e flexivel a renderização das views

namespace App\Controllers;

use App\Helpers\Connection;
use App\Helpers\Page;
use App\Helpers\Mensagens;

class SobreController{      

    
    public function sobre(){

        $page = new Page(); 
        $page->renderPage('sobre', true, true);        
        
    } 
}