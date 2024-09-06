<?php

$alunos = 15;
$total = 0;
for($i=0; $i < $alunos; $i++){ 
    $dinheiro[$i] = readline("$i.R$");
    $total += $dinheiro[$i];
}











function atv_6($valor1,$valor2){
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
function atv_5(){
    $num1 = readline("informe um número");
    $num2 = readline("informe um número");
        if($num1 > $num2){
            $p = $num2;
            $g = $num1;
        }elseif($num2 > $num1){
            $p = $num1;
            $g = $num2;
        }
        for ($i=$p+1; $i < $g; $i++){ 
            if($i%5 == 0){
                print"O número $i é divisível por 5.\n";
            }
        }
}

function atv_4($nums){
    $pares = 0;
    $impares = 0;
    for ($i=0; $i < $nums; $i++){ 
        $valores[] = readline("mesagem legal para te pedir um número");
    }
    foreach($valores as $valor){
        if($valor%2 == 0){
            $par[] = $valor;
            $pares++;
        }else{
            $impar[] = $valor;
            $impares++;
        }
    }
    print"Foram informados $pares números pares e $impares números ímpares.";

}
function atv_3($nums){
    for($i=0; $i < $nums; $i++){ 
        $valores[] = readline("Informe um número:");
    }
    print "O menor valor de todos esse valores é o ".min($valores);
}

function atv_2($alunos){
    $total = 0;
    for($i=0; $i < $alunos; $i++){ 
        $dinheiro[$i] = readline("$i.R$");
        $total += $dinheiro[$i];
    }
    return $total;
}




function atv_1(){
    $valor = readline("Informe um número");
    if($valor >= 0){
        $valor *= 2;    
    }else{
        $valor *= 3;
    }
    print $valor;
    return $valor;
}