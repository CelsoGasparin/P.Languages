<?php


require_once "Midia.php";


class DVD extends Midia{

    public function getTipo(){
        $midia =  get_class($this);
        return parent::getTipoPai($midia);
    }
}