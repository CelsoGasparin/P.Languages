<?php

    $ValorBase;
    
    $running = readline("Você quer iniciar a calculadora?");
    
    if($running == "Sim" or $running == "sim" or $running == "SIM"){
        $using = 1;
    }
    else{
        $using = 0;
    }
    while($using == 1){
        echo"\nQual operação você quer fazer?+-*/^";
    }
    