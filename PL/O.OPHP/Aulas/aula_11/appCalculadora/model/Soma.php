<?php

require_once "Calculadora.php";

class Soma extends Calculadora{

    public function __toString(){
        return "Essa Soma ".$this->numA."+".$this->numB." deu o resultado ".$this->calcular();
    }

    public function calcular(){
        return $this->numA+$this->numB;
    }



}


