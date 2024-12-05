<?php

require_once "caneta.php";

class CanetaVermelha extends Caneta{





    public function escrever(){
        $cor = 'Vermelha';
        parent::escreverPai($cor);
        // print"Caneta escrevendo com cor Vermelha.\n";
    }
}