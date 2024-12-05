<?php

require_once "model/Midia.php";
require_once "model/CD.php";
require_once "model/DVD.php";
require_once "/home/lab/fun/menuFun.php";

$midias = [];
$midiasDispo = getAllMidias();
do{
    system('clear');
    print"+++MÍDIAS DISPONIVEIS+++\n";
    arrayMenu(false,$midiasDispo);
    $descricao = readline("Informe a Descrição de sua Mídia- ");
    do{
        $precoPag = readline('Qual foi o preço Pago na sua midia?');
    }while(!is_numeric($precoPag));
    while(true){
        $tipoMidia = readline('Que tipo de Mídia essa coisa é?');
        foreach($midiasDispo as $key=>$mid){
            if($tipoMidia == $mid){
                $midias[] = new $tipoMidia($descricao,$precoPag);
                break 2;
            }
        }
    }
}while(count($midias) < 5);
system('clear');
foreach($midias as $key=>$midia){
    print $midia->getDados();
    print "\n---------\n";
}

function getAllMidias(){
    $midias = [];
    foreach(get_declared_classes() as $key=>$class){
        if(is_subclass_of($class,'Midia')){
            $midias[] = $class;
        }
    }    
    return $midias;
}
