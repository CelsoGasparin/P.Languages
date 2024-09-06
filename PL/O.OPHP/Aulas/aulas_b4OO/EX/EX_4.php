<?php
$nums = 10;











function atv_5(){
    for($i=0; $i < 4; $i++){ 
        $pessoas[$i]['nome'] = readline("Qual teu nome?");
        $pessoas[$i]['idade'] = readline("Qual tua idade?");
        $pessoas[$i]['CidNat'] = readline("Qual tua Cidade natal?");
        $pessoas[$i]['profissao'] = readline("Qual tua profissão?");
    }
    $idadeveio = $pessoas[0]['idade'];
    for($i=1; $i < 4; $i++){ 
        if($idadeveio < $pessoas[$i]['idade']){
            $idadeveio = $pessoas[$i]['idade'];
            $veio = $i;
        }    
    }
    print "PESSOA MAIS VELHA\n";
    print "[NOME]:".$pessoas[$veio]['nome']."\n";
    print "[IDADE]:".$pessoas[$veio]['idade']."\n";
    print "[CIDADE NATAL]:".$pessoas[$veio]['CidNat']."\n";
    print "[PROFISSÃO]:".$pessoas[$veio]['profissao']."\n";
}
function atv_4($nums){
    for($i=0; $i < $nums; $i++){ 
        $vetor[$i] = readline("Informe um número");
    }
    sort($vetor,SORT_NUMERIC);
    print"[MENOR_VALOR]:".$vetor[0]."\n[MAIOR_VALOR]:".$vetor[$nums-1]."\n";
}

function atv_3(){
    for ($i=0; $i < 10; $i++) { 
        $vetA[] = readline("Informe um número");
        $vetB[] = readline("Informe um número");    
    }
    //vetC
    $vetC = array();
    foreach($vetA as $A){
        foreach($vetB as $B){
            if($B == $A){
                if(in_array($B,$vetC) == false){
                    $vetC[] = $B;
                }
            }
        }
    }
    //sort($vetC,SORT_NUMERIC);
    //var_dump($vetC);
    //vetD
    $vetD = array();
    foreach($vetA as $A){
        $vetD[] = $A;
    }
    foreach($vetB as $B){
        if(in_array($B,$vetD) == false){
            $vetD[] = $B;
        }
    }
    //sort($vetD,SORT_NUMERIC);
    //var_dump($vetD);
}

function atv_2($num){
    for ($i=0; $i < $num; $i++) { 
        $vetA[$i] = readline("Informe uma palavra");
    }
    foreach($vetA as $A){
        $vetB[] = $A;
    }
    foreach($vetB as $B){
        print "$B,";
    }
}
function atv_1($nums){
    $media = 0;
    for($i=0; $i < $nums; $i++){ 
        $valor[$i] = readline("Informe um número");       
    }
    $media = array_sum($valor);
    $media /= $nums;
    print "A média é desses números é $media :D"; 
}






