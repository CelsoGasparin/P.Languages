<?php

require_once "caneta.php";


class CanetaAzul extends Caneta{




    public function escrever(){
        $cor = 'Azul';
        parent::escreverPai($cor);
        // print"Caneta escrevendo com cor Azul.\n";
        
    }
}