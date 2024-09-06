<?php


$rep = 5;

for($i = 0;$i < $rep;$i++){
    $ret[$i]['base'] = readline("Informe a base[em cm]:");
    $ret[$i]['altura'] = readline("Informe a altura[em cm]:");
    $reta_area[$i] = ret_area($ret[$i]);
}
for($i = 0;$i < $rep;$i++){
    print "A área do retângulo ". $i+1 ." é: ".$reta_area[$i]."\n";
}









































function ret_area(array $array){
    if(is_numeric($array['base']) and is_numeric($array['altura'])){
        return $array['base']*$array['altura'];
    }
    return 'ERR0';
}



