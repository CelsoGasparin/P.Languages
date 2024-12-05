<?php

require_once "Midia.php";


class CD extends Midia{

    public function getTipo(){
        $midia = get_class($this);
        return parent::getTipoPai($midia);
    }

}

