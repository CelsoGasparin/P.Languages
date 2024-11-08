<?php

require_once "Espaco.php";


class Hotel extends Espaco{

    private $numEstrelas;
    private bool $cafeIncluso;

    


    //methods
    public function getDadosHotel(){

        if($this->cafeIncluso){
            $cafe = "Sim";
        }else{
            $cafe = "Não";
        }
        return"[Nome]- ". $this->nome
             ."\n[Endereço]- ".$this->endereco
             ."\n[Número de Estrelas]- ".$this->numEstrelas
             ."\n[Café Incluso]- ".$cafe;
    }    




    /**
     * Get the value of numEstrelas
     */
    public function getNumEstrelas()
    {
        return $this->numEstrelas;
    }

    /**
     * Set the value of numEstrelas
     */
    public function setNumEstrelas($numEstrelas): self
    {
        $this->numEstrelas = $numEstrelas;

        return $this;
    }

    /**
     * Get the value of cafeIncluso
     */
    public function isCafeIncluso(): bool
    {
        return $this->cafeIncluso;
    }

    /**
     * Set the value of cafeIncluso
     */
    public function setCafeIncluso(bool $cafeIncluso): self
    {
        $this->cafeIncluso = $cafeIncluso;

        return $this;
    }
}