<?php

//atv2(10);










function atv3($pessoas){
    for($i=0; $i < $pessoas; $i++){ 
        $nomes[] = readline("NOME:");
        $peso[] = (float)readline("PESO[Metros]:"); 
        $altura[] = (float)readline("ALTURA[Kg]:");   
    }
    for($i=0; $i < $pessoas; $i++){
        $IMC[] = $peso[$i]/($altura[$i]*$altura[$i]);
        print $nomes[$i]." tem ".$peso[$i]."Kgs e tem ".$altura[$i]."metros e IMC ".round($IMC[$i],2,PHP_ROUND_HALF_UP).".\n"; 
    }
}



function atv2($valor){
    for($valor -= 1;$valor > 0;$valor--){ 
        print $valor."\n";
    }
}

function atv1($nums){
    for ($i=0; $i < $nums; $i++){ 
        $valores[] = readline("mesagem legal para te pedir um número");
    }
    foreach($valores as $valor){
        if($valor >= 0){
            $positivo[] = $valor;
            
        }else{
            $negativo[] = $valor;
            
        }
    }
    print"[POSITIVOS]:\n";
    foreach($positivo as $pos){
        print $pos."\n";
    } 
    print"[NEGATIVOS]:\n";
    foreach($negativo as $neg){
        print $neg."\n";
    }
}