<?php

require_once "Calculadora.php";

class Subtracao extends Calculadora{

    public function __toString(){
        return "Essa Subtração ".$this->numA."-".$this->numB." deu o resultado ".$this->calcular();
    }

    public function calcular(){
        return $this->numA-$this->numB;
    }



}