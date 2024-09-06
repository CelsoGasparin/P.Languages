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
        $bool = true;
        for($i=2; $i < $primo; $i++){ 
            if($primo%$i == 0){
                $bool = false;
                print"$primo não é primo:(\n";
                $i = $primo;
                break;           
            }
            

            
        }
        if($bool == true){
            print"$primo é primo:)\n";
        }
    }
}