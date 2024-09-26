<?php

require_once "model/Atleta.php";
require "/home/lab/fun/menuFun.php";



$pais1 = new Pais("China","Ásia");
$pais2 = new Pais("Estonia","Europa");
$paises = [$pais1,$pais2];
$paisesDispo = [$pais1->getNome(),$pais2->getNome()];


for($i=0; $i < 4; $i++){ 
    

    system('clear');
    arrayMenu(false,$paisesDispo);
    print"------ATLETA". $i+1 ."------\n";

    $nome = readline("Qual o nome do seu Atleta?- ");

    do{
        $idade = readline("Qual a idade do seu Atleta?- ");
    }while(is_numeric($idade) == false);

    $esporte = readline("Qual esporte seu Atleta está jogando?- ");

    do{
        $atletaPais = readline("Por qual País seu atleta está jogando?- ");
    }while(in_array(strtolower($atletaPais),array_map('strtolower',$paisesDispo)) == false);    
    
    

    
    $atletas[] = new Atleta($nome, $idade,$esporte, $atletaPais,$paises);
}
//print_r($atletas);
system('clear');
foreach($atletas as $key=>$atleta){
    print $atleta->getNome()." é atleta do ". $atleta->getPais()->getNome().", continente ". $atleta->getPais()->getContinente() .
    ", possui ". $atleta->getIdade()." anos e atua no esporte ". $atleta->getEsporte()."\n--------------\n";

}





