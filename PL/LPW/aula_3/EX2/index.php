<?php

require_once 'model/Pessoa.php';

if(($_GET['tipo'] == 'A' || $_GET['tipo'] == 'C') && isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade'])){
    if($_GET['tipo'] == 'C')
    print new Pessoa($_GET['nome'],$_GET['sobrenome'],$_GET['idade']);
    else{
        $array = ['nome' =>$_GET['nome'],'sobrenome'=>$_GET['sobrenome'],'idade'=>$_GET['idade']];
        print'NOME COMPLETO: '.$array['nome'].' '.$array['sobrenome'].'<br>IDADE: '.$array['idade'];
    }
}else{
    print 'Informe um Tipo válido{C ou A}, Nome,Sobrenome e Idade na URL!';
}