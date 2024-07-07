<?php


$BIGSHOT = "101010010";
$wababa = 45;
$BALLS = $wababa.$BIGSHOT;
print $BALLS;


function nomelegal(&$texto,$chara){
    $rep = substr_count($texto,$chara);
    $texto = str_replace($chara,"",$texto);
    //print $texto;
    //print $rep;
    return $rep;//por algum motivo eu fiz a função retornar a quantidade de $chara repitidos
    //tem um problema (depende da maneira que você enxerga o problema),ele considera as letras com acentos como letras diferentes 
}



