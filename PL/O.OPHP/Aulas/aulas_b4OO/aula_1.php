<?php

Atv3(50,1);






















function Atv3($num,$in){
    for($i=$in; $i <= $num; $i++){ 
        if($i%3 == 0){
            print $i." ";
        }
    }
}

function Atv2($num,$in){
    $soma = 0;
    for($i=$in; $i <= $num; $i++){ 
         $soma += $i;
    }
    print "A soma do número $in ate o número $num é igual a ".$soma;
}

function Atv1($num){
for($i=1; $i <= $num; $i++){ 
    print $i." ";
}
print "\n";
$whi = 0;
while($whi < $num){
    $whi++;
    print $whi." ";
}
print "\n";
$whido = 1;
do{
    print $whido." ";
    $whido++;
}while($whido <= 10);
print "\n";
}