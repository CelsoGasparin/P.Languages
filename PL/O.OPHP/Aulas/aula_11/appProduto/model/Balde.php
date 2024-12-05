<?php

require_once "Produto.php";

class Balde extends Produto{
    
    private $capacidade;


    public function __construct($cap,$des,$und){
        $this->capacidade = $cap;
        parent::__construct($des,$und);
    }


    public function getDados(){
        $string = "\n[Capacidade]- ".$this->capacidade;
        return parent::getDadosPai($string);
    }


    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}