<?php

require_once "Calculadora.php";

class Divisao extends Calculadora{

    public function __toString(){
        return "Essa divisão ".$this->numA."/".$this->numB." deu o resultado ".$this->calcular();
    }

    public function calcular(){
        return $this->numA/$this->numB;
    }



}