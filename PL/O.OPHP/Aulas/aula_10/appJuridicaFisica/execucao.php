<?php



require_once "model/PessoaFisica.php";
require_once "model/PessoaJuridica.php";
require_once "/home/lab/fun/menuFun.php";





$pessoas = [];




while(true){
    system('clear');
    montarMenu(true,"Cadastrar Pessoa Física","Cadastrar Pessoa Jurídica","Listar","Excluir");
    $opValue = readline();
    $opValue = strtolower($opValue);
    switch($opValue){



        case 'cadastrar pessoa fisica':
        case 'cadastrar pessoa física':
        case 1:
        
        break ;


        case 'cadastrar pessoa juridica':
        case 'cadastrar pessoa jurídica':
        case 2:
            
        break;
        

        case 'listar':
        case 3:
                
        break;


        case 'excluir':
        case 4:
                    
        break;


        case 'sair':
        case 0:
        
        break 2;


        default:
        break;
    }


}