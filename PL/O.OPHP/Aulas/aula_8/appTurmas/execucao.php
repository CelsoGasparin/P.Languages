<?php

require_once "model/Aluno.php";




$turma = new Turma("nomeTurma","cursoTurma");



$alunos = [];
for($i=0; $i < 5; $i++){ 
    system('clear');
    montarMenu(false,"Turma Disponivel: ".$turma->getNome());
    $alunos[] = new Aluno(readline("Qual o nome do Aluno?"),
    readline("Qual a idade do Aluno?"),readline("Qual o nome da Turma do aluno?"));


}
//print_r($alunos);

foreach($alunos as $aluno){

    if(isset($aluno->getTurma()) and $aluno->getTurma()->getNome() == $turma->getNome()){
        print "[Nome]- ". $aluno->getNome().
        "\n[Idade]- ". $aluno->getIdade(). " Anos";
        print "\n----------\n";
    }
}












function arrayMenu(bool $sair = true,array $itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 3; 
    $sizeInte = $sizeTab+3;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - (strlen($itens[$i])+strlen($i)))."]\n";
        print str_repeat("=",$sizeInte)."\n";
    }
    if($sair){
        print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0])-1)."]\n";
        print str_repeat("=",$sizeInte)."\n";
    }
}
function montarMenu(bool $sair = true,...$itens){

    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);

    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }

    $sizeTab += 4; 
    $sizeInte = $sizeTab+3;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - (strlen($itens[$i])+strlen($i)))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    if($sair){        
        print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0])-1)."]\n";
        print str_repeat("=",$sizeInte)."\n";
    }

}