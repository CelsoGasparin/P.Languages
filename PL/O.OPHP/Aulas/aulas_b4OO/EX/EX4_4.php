<?php

for($i=0;$i<4;$i++){
    $turma["curso"] = readline("Qual o curso dessa turma?\n");
    $turma["ano"] = readline("Qual o ano dessa turma?\n");
    $turma["qtdAlunos"] = readline("Qual a quantidade de alunos dessa turma?\n");
    $turmas[$i] = $turma;
}
$totalAlunos = 0;
foreach($turmas as $tur){
    $totalAlunos += $tur["qtdAlunos"];
}
print"O total de Alunos dessas salas é $totalAlunos \n";







































function f(){
    $turma1["curso"] = readline("Qual o curso dessa turma?\n");
    $turma1["ano"] = readline("Qual o ano dessa turma?\n");
    $turma1["qtdAlunos"] = readline("Qual a quantidade de alunos dessa turma?\n");
    print"-----------------\n";
    $turma2["curso"] = readline("Qual o curso dessa turma?\n");
    $turma2["ano"] = readline("Qual o ano dessa turma?\n");
    $turma2["qtdAlunos"] = readline("Qual a quantidade de alunos dessa turma?\n");
    print"-----------------\n";
    $turma3["curso"] = readline("Qual o curso dessa turma?\n");
    $turma3["ano"] = readline("Qual o ano dessa turma?\n");
    $turma3["qtdAlunos"] = readline("Qual a quantidade de alunos dessa turma?\n");
    print"-----------------\n";
    $turma4["curso"] = readline("Qual o curso dessa turma?\n");
    $turma4["ano"] = readline("Qual o ano dessa turma?\n");
    $turma4["qtdAlunos"] = readline("Qual a quantidade de alunos dessa turma?\n");
    print"-----------------\n";
    //AAAAAAAAAAAAAAAAA NÃO PODE USAR FOR
    $turmas = array($turma1,$turma2,$turma3,$turma4);
    $totalAlunos = 0;
    foreach($turmas as $turma){
        $totalAlunos += $turma["qtdAlunos"];
    }
    print"O total de Alunos nas turmas é $totalAlunos";
    
}
