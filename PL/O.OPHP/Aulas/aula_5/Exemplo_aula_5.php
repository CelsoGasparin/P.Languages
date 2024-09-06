<?php


class Monitor {

    //Atributos
    public $cor;
    public $resolucao;
    public $marca;

    //Método
    function ligar(){
        echo "\nComputador Ligado!";
    }
    function desligar(){
        echo"\nComputador Desligado!";
    }
    function mostrarImagem(){
        echo"\nImagem com a resolução ". $this->resolucao ."!";
    }
}


$monitor1 = new Monitor();
$monitor1->cor = "Preto";
$monitor1->resolucao = "1920x1080";
$monitor1->marca = "AOC";
$monitor1->ligar();
$monitor1->mostrarImagem();
$monitor1->desligar();
echo "\nCor do monitor1: ".$monitor1->cor;

$monitor2 = new Monitor();
$monitor2->cor = "Prata";
$monitor2->resolucao = "1366x736";
$monitor2->marca = "Lenovo";
$monitor2->ligar();
$monitor2->mostrarImagem();
$monitor2->desligar();
echo "\nCor do monitor2: ".$monitor2->cor;




















