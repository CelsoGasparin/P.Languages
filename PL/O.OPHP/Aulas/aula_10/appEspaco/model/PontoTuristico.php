<?php

require_once "Espaco.php";


class PontoTuristico extends Espaco{

    private $duracaoDaVista;



    //methods
    public function getDadosPontoTuristico(){
        return"[Nome]- ". $this->nome
             ."\n[Endereço]- ".$this->endereco
             ."\n[Duração da Visita]- ".$this->duracaoDaVista."H";
    }




    /**
     * Get the value of duracaoDaVista
     */
    public function getDuracaoDaVista()
    {
        return $this->duracaoDaVista;
    }

    /**
     * Set the value of duracaoDaVista
     */
    public function setDuracaoDaVista($duracaoDaVista): self
    {
        $this->duracaoDaVista = $duracaoDaVista;

        return $this;
    }
}
