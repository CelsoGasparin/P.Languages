<?php

require_once "Calculadora.php";

class Multiplicacao extends Calculadora{

    public function __toString(){
        return "Essa multiplicação ".$this->numA."*".$this->numB." deu o resultado ".$this->calcular();
    }



    public function calcular(){
        return $this->numA*$this->numB;
    }



}