<?php

require_once "model/Funcionario.php";


$qtdfunc = 5;

$funcs = [];
for($i=0; $i < $qtdfunc; $i++){ 
    system('clear');

    $nome = readline("Qual o nome do funcionário?");     
    $cargo = readline("Qual o cargo do Funcionário?"); 
    
    do{
        $salario = readline("Qual o salário do Funcionário?"); 
    }while(is_numeric($salario) == false );
     
    $depNome = readline("Qual o nome do Departamento do Funcionário?"); 
     
    do{
        $depSa = readline("Qual o número da sala do Departamento do Funcionário?"); 
    }while(is_numeric($depSa) == false );//isso tá muito feio socorro

    $funcs[] = new Funcionario($nome,$cargo,$salario,$depNome,$depSa);
}


system('clear');
foreach($funcs as $key => $func){
    print $func."\n-------------\n";
}








