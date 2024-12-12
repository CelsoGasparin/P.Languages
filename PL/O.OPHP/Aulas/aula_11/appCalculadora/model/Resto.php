<?php

require_once "Calculadora.php";

class Resto extends Calculadora{

    public function __toString(){
        return "O Resto dessa divisão ".$this->numA."/".$this->numB." deu o resultado ".$this->calcular();
    }


    public function calcular(){
        return $this->numA%$this->numB;
    }
}