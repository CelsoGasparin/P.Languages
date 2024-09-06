<?php

primos();

function primos(){
    $num = 99;
    while($num >= 2){
        $num = readline("Informe um número maior que um:)");
        if($num > 1){
            $nums[] = $num;
        }
    }
    
    foreach($nums as $primo){
        $bool = check($primo);
        if($bool == false){
            print"$primo não é primo:(\n";
        }else{
            print"$primo é primo:)\n";
        }
    }
}
function check($num){
    $bool = true;
        for($i=2; $i < $num; $i++){ 
            if($num%$i == 0){
                $bool = false;           
            }
            if($bool == false){
                return $bool;
            }
        }
    return $bool;    
}