<?php

require_once "iRadio.php";



class RadioPortatil implements iRadio {
 
    private $cor;
    private $marca;






    //metódos

    public function ligarRadio(){
        print"Ligou Rádio Portátil!\n";
    }

    public function desligarRadio(){
        print"Desligou Rádio Portátil!\n";
    }






    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}
