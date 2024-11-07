<?php

require_once "Espaco.php";

class Restaurante extends Espaco{

    private $tipoComida;




    //methods
    public function getDadosRestaurante(){
        return"[Nome]- ". $this->nome
             ."\n[Endereço]- ".$this->endereco
             ."\n[Tipo de Comida]- ".$this->tipoComida;
    }


    /**
     * Get the value of tipoComida
     */
    public function getTipoComida()
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida($tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }
}


