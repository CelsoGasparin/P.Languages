<?php


print mult(1,-1);

function mult($valor1,$valor2){

    $resultado = 0;
    if($valor2 > 0){
        for($i=0; $i < $valor2; $i++){ 
            $resultado += $valor1;
        }
    }elseif($valor2 < 0){
        for($i=$valor2; $i < 0; $i++){ 
            $resultado -= $valor1;
        }
    }
    
    return $resultado;
}

