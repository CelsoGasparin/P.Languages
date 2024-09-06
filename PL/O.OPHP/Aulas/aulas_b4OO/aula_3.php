<?php

$vezes = 3;
for($i = 0;$i < $vezes;$i++){
    $raios[] = readline("ME PASSA O RAIO DO CÍRCULO AÍ(em centímetros)");           
}
$pi = 3.14;
$contador = 1;
foreach($raios as $raio){
    $area = $pi*($raio*$raio);
    $circunferencia = 2*$pi*$raio;
    print "A área do círculo número $contador é $area.\n";
    print "A circunferência do círculo número $contador é $circunferencia.\n";
}











function atv_2B(){
    $raio = readline("ME PASSA O RAIO DO CÍRCULO AÍ(em centímetros)");
    $pi = 3.14;
    $circunferecia = 2*$pi*$raio;
    return $circunferecia;
}
function atv_2A(){
    $raio = readline("ME PASSA O RAIO DO CÍRCULO AÍ(em centímetros)");
    $pi = 3.14;
    $area = $pi*($raio*$raio);
    return $area;
}
function atv_1(){
    $num = 101;
    while($num > 0){
        $num = readline("Informe um número(MAIOR DO QUE ZERO POR FAVOR.obrigado):>.");
        if($num > 0){
            $nums[] = $num; 
        }
    }
    foreach($nums as $numer){
        $base = $numer;
        for($i=$numer-1; $i > 1; $i--){ 
            $numer *= $i;    
        }
        print "O fatorial de $base é $numer. \n";
    }
}