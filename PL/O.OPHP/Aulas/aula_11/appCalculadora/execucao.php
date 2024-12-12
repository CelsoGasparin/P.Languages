<?php

require_once "model/Calculadora.php";
require_once "model/Soma.php";
require_once "model/Subtracao.php";
require_once "model/Multiplicacao.php";
require_once "model/Divisao.php";
require_once "model/Resto.php";
require_once "/home/lab/fun/montarMenu.php";
require_once "/home/lab/fun/texto.php";


// montarMenu(true,"teste");

$operacoes = ['Soma','Subtração','Multiplicação','Divisão','Resto'];
while(true){
    system('clear');
    arrayMenu(false,$operacoes);
    while(true){//Escolher operacao
        $opValue = readline("Qual operação tu quer usar?");
        foreach($operacoes as $operacao){
            if(strtolower(clearString($opValue)) == strtolower(clearString($operacao))){
                $chosenOperacao = clearString($operacao);
                break 2;
            }
        }
    }
    system('clear');
    do{
        $numA = readline("Qual o primeiro número que você vai Escolher?");
    }while(!is_numeric($numA));
    do{
        $numB = readline("Qual o segundo número que você vai usar para a ".$chosenOperacao."?");
    }while(!is_numeric($numB));
    if($numA == 0 and $numB == 0){
        break;
    }
    system('clear');
    print new $chosenOperacao($numA,$numB);
    $numA = null;
    $numB = null;
    sleep(3);
}



