<?php

require_once "iFormaGeometrica.php";

class Circulo implements iFormaGeometrica{
    
    private $raio;

    //__construct
    // public function __construct($r){
    //     $this->raio = $r;
    // }



    //metodos
    public function getArea(){
        return 3.14*($this->raio*$this->raio);
    }
    public function getDesenho(){
        return  "\n   xxxxxx   \n".
                "  x      x  \n".
                " x        x \n".
                "x          x\n".
                "x          x\n".
                "x          x\n".
                " x        x \n".
                "  x      x  \n".
                "   xxxxxx   \n";
    }




    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}
