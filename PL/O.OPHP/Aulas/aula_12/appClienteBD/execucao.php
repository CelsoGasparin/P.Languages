<?php



require_once "util/Connection.php";
require_once "model/Cliente.php";
require_once "model/ClientePF.php";
require_once "model/ClientePJ.php";
require_once "/home/lab/fun/menuFun.php";
// $conex = new Connection();
// print_r(Connection::getConn());





while(true){
    system('clear');
    montarMenu(true,"Cadastrar ClientePF","Cadastrar ClientePJ","Listar Clientes","Buscar Cliente","Excluir Cliente");
    $opValue = readline();
    switch(strtolower($opValue)){
        case 'cadastrar clientepf':
        case 1:
            system('clear');
            $cliente = new ClientePF();
            $cliente->setNome(readline('Qual o nome do cliente?'));
            $cliente->setNomeSocial(readline('Qual o nome social do cliente?'));
            $cliente->setCpf(readline('Qual o CPF do cliente?'));
            $cliente->setEmail(readline('Qual o email do cliente?'));
        break;

        case 'cadastrar clientepj':
        case 2:
            system('clear');
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline('Qual a razão Social do cliente?'));
            $cliente->setNomeSocial(readline('Qual o nome social do cliente?'));
            $cliente->setCNPJ(readline('Qual o CNPJ do cliente?'));
            $cliente->setEmail(readline('Qual o email do cliente?'));
        break;

        case 'listar clientes':
        case 3:
                # code...
        break;

        case 'buscar cliente':
        case 4:
                # code...
        break;
            
        case 'excluir cliente':
        case 5:
                # code...
        break;
        
        case 'sair':
        case 0 :
        break 2;

        default:
            # code...
        break;
    }
}





