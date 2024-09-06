<?php
$rep = 5;
for($i=0; $i < $rep; $i++){ 
    $vet_A[$i] = readline("Informe um número");
    $vet_1[$i] =Fahrenheit($vet_A[$i]);
    $vet_2[$i] =Fatorial($vet_A[$i]);
    $vet_3[$i] =funcao($vet_A[$i]); 
}
print "[VET_1]- ";
for($i=0; $i < $rep-1; $i++) { 
    print $vet_1[$i].",";
}
print $vet_1[$rep-1].".";
print "\n[VET_2]- ";
for($i=0; $i < $rep-1; $i++) { 
    print $vet_2[$i].",";
}
print $vet_2[$rep-1].".";
print "\n[VET_3]- ";
for($i=0; $i < $rep-1; $i++) { 
    print $vet_3[$i].",";
}
print $vet_3[$rep-1].".";

function Fahrenheit(int $num){
    return ($num*1.8) + 32;
}
function Fatorial(int $num){
    $result = 0;
    if($num >= 0){
        $result = $num;
        for($i=1; $i < $num; $i++){ 
            $result *= $num-$i;
        }        
    }
    return $result;
}
function funcao($num){
    return ((pow($num,2))+(2*$num)+4)/(2*$num);
}