<?php





function atv_4(){
    $A = readline("Informe um número A");
    $B = readline("Informe um número B");
    $C = readline("Informe um número C");
    $media = mediaPon($A,$B,$C);
    print"A média ponderada desses valores A B C é ".$media;
}

function atv_3($cidades){
    for($i=0; $i < $cidades; $i++){ 
        $nome[$i] = readline("Informe o nome da cidade.");
        $habitantes[$i] = readline("Informe a quantidade de habitantes da cidade.");
        $area[$i] = readline("Informe a área da cidade.");
        $altitude[$i] = readline("Informe a altitude da cidade.");
        $estado[$i] = readline("Informe o estado da cidade.");
    }
    for($i=0; $i < $cidades; $i++){ 
        ImprimaDados($nome[$i],$habitantes[$i],$area[$i],$altitude[$i],$estado[$i][$i]);
    }
}
function atv_2(int $reps){
    for ($i=0; $i < $reps; $i++) { 
        $base = readline("Informe a base de um retângulo");
        $altura = readline("Informe a altura de um retãngulo");
        $area = $base*$altura;
        $perimetro = ($base*2)+($altura*2);
        print"A área do retângulo número $i é igual a $area.\n";
        print"O perímetro do retângulo número $i é igual a $perimetro.\n";    
    }
}
function atv_1(int $xizes){
    for($i=0; $i < $xizes; $i++){ 
        $x[$i] = readline("Informe um número.");
        $y[$i] = (5*$x[$i])+(2*$x[$i])+3;
        print"O valor de Y com x = ".$x[$i]." é ".$y[$i].".\n";    
    }
}





function mediaPon($A,$B,$C){
    return (($A*3)+($B*5)+($C*2))/10;
}
function ImprimaDados($nome,$habitantes,$area,$altitude,$estado){
    printf("%s|%d|%dkm²|%dm|%s\n",$nome,$habitantes,$area,$altitude,$estado);
}