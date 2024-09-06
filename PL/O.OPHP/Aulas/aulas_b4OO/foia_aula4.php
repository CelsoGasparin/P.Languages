<?php
do{
     $num = readline("informe um número");
     $valor[] = $num;
     if(check($num) == true and $num != 0){
        $primo[] = $num;
     }
}while($num > 0);
    
foreach($primo as $oi){
    print "$oi é primo\n";
}


function check($num){
    $bool = true;
        for($i=2; $i < $num; $i++){ 
            if($num%$i == 0){
                $bool = false;           
            }
        }
    return $bool;    
}
