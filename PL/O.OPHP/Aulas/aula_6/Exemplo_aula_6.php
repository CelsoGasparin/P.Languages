<?php 


class Liquidificador{

    //atributos
    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    //construct


    public function __construct($cor){
        $this->cor = $cor;
    }


    //métodos 

    public function ligar(){
        print"Ligado\n";
        $this->girarMotor();
    }
    public function desligar(){
        print "Desligado\n";
        $this->pararMotor();
    }
    public function inverter(){
        print"Motor Invertido\n";
    }
    private function girarMotor(){
        print"Motor girando\n";
    }
    private function pararMotor(){
        print"Motor parado\n";
    }

    //GETs e SETs
    


    /**
     * Get the value of cor
     */
    public function getCor(){
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self{
        $this->cor = $cor;

        return $this;
    }
}//fim da classe


$liq = new Liquidificador("Vermelho");
$liq->ligar();
$liq->desligar();
print "A cor do liquidificador é ".$liq->getCor() .".\n";


