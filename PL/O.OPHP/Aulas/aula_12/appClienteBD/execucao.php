<?php



require_once "util/Connection.php";
require_once "model/Cliente.php";
require_once "model/ClientePF.php";
require_once "model/ClientePJ.php";
require_once "/home/lab/fun/menuFun.php";
require_once "dao/ClienteDAO.php";
// $conex = Connection::getConn();
// print_r($conex);


// $teste = realpath(__DIR__."/..");
// print $teste;
// print is_dir($teste."/..");
// print is_dir(realpath(__DIR__."/.."));


// print_r(ClienteDAO::mapClientes(0));
// ClienteDAO::excluirCliente('1')

// die;
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
            ClienteDAO::inserirCliente($cliente);
        break;

        case 'cadastrar clientepj':
        case 2:
            system('clear');
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline('Qual a razão Social do cliente?'));
            $cliente->setNomeSocial(readline('Qual o nome social do cliente?'));
            $cliente->setCNPJ(readline('Qual o CNPJ do cliente?'));
            $cliente->setEmail(readline('Qual o email do cliente?'));
            ClienteDAO::inserirCliente($cliente);
        break;

        case 'listar clientes':
        case 3:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                foreach(ClienteDAO::listarClientes() as $key => $cli) {
                    print "[ID]- ".$cli['id']."\n";
                    if($cli['tipo'] == 'F'){
                        print"[Tipo]- Pessoa Física\n".
                        "[Nome]- ".$cli['nome']."\n".
                        "[CPF]- ".$cli['cpf']."\n";
                    }else{
                        print"[Tipo]- Pessoa Jurídica\n".
                        "[RazaoSocial]- ".$cli['razao_social']."\n".
                        "[CNPJ]- ".$cli['cnpj']."\n";
                    }
                    print"[NomeSocial]- ".$cli['nome_social']."\n".
                    "[Email]- ".$cli['email']."\n";
                    print"--------\n";
                }
                $opValue = readline();
            }
        break;

        case 'buscar cliente':
        case 4:
            while($opValue != 0){
                system('clear');
                montarMenu(true,"Digite o Nome Social ou o ID da Pessoa que você quer Buscar.");
                $opValue = readline();
                $cliB = ClienteDAO::mapClientes($opValue);
                if($cliB != null){
                    system('clear');
                    montarMenu(false,"Pressione qualquer telca para sair(TEM QUE DAR ENTER).");
                    print "[ID]- ".$cliB['id']."\n";
                    if($cliB['tipo'] == 'F'){
                        print"[Tipo]- Pessoa Física\n".
                        "[Nome]- ".$cliB['nome']."\n".
                        "[CPF]- ".$cliB['cpf']."\n";
                    }else{
                        print"[Tipo]- Pessoa Jurídica\n".
                        "[RazaoSocial]- ".$cliB['razao_social']."\n".
                        "[CNPJ]- ".$cliB['cnpj']."\n";
                    }
                    print"[NomeSocial]- ".$cliB['nome_social']."\n".
                    "[Email]- ".$cliB['email']."\n";
                    print"--------\n";
                    readline();    
                }elseif($opValue != 0){
                    print"DIGITE UM VALOR VÁLIDO!";
                    sleep(2);
                }
            }
        break;
            
        case 'excluir cliente':
        case 5:
                while($opValue != 0){
                    system('clear');
                    montarMenu(true,"Digite o Nome Social ou o ID da Pessoa que você quer deletar.");
                    $opValue = readline();
                    $cliB = ClienteDAO::mapClientes($opValue);
                    if($cliB != null){
                        $excSure = 1;
                        while($excSure != 0){
                            
                            system('clear');
                            montarMenu(true,"Tem certeza que quer Excluir essa Pessoa?");
                            print "[ID]- ".$cliB['id']."\n";
                            if($cliB['tipo'] == 'F'){
                                print"[Tipo]- Pessoa Física\n".
                                "[Nome]- ".$cliB['nome']."\n".
                                "[CPF]- ".$cliB['cpf']."\n";
                            }else{
                                print"[Tipo]- Pessoa Jurídica\n".
                                "[RazaoSocial]- ".$cliB['razao_social']."\n".
                                "[CNPJ]- ".$cliB['cnpj']."\n";
                            }
                            print"[NomeSocial]- ".$cliB['nome_social']."\n".
                            "[Email]- ".$cliB['email']."\n";
                            print"--------\n";
                            $excSure = readline();
                            if($excSure != 0){
                                ClienteDAO::excluirCliente($cliB['id']);
                                break;
                            }
                             
                        } 
                    }elseif($opValue != 0){
                        print"DIGITE UM VALOR VÁLIDO!";
                        sleep(2);
                    }
                }
        break;
        
        case 'sair':
        case 0 :
        break 2;

        default:
            
        break;
    }
}





