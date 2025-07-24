<?php

namespace App\Helpers;

class Mensagens {

    public static function sucesso($mensagem) {
        $_SESSION['msg_success'] =  "<div class='alert alert-success text-center'>$mensagem</div>";
    }


    public static function erro($mensagem) {
        $_SESSION['msg_error'] = "<div class='alert alert-danger text-center'>$mensagem</div>";
    }

    public static function alerta($mensagem) {
        $_SESSION['msg_alerta'] = "<div class='alert alert-warning text-center'>$mensagem</div>";
    }
}



