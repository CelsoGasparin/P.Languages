<?php

require_once "/home/lab/fun/menuFun.php";
require_once "model/Pedido.php";

$pratos = [
    new Prato("Camarao a Milanesa",110),
    new Prato("Pizza Margherita",80),
    new Prato("Macarrao a Carbonara",60),
    new Prato("Bife a Parmegiana",75),
    new Prato("Risoto ao Funghi",70)
];
$dispoPratos = listarPratos($pratos);//essa funcao organiza o menu dos pratos e Seta os numeros dos pratos
$pedidos = [];

while(true){
    system('clear');
    montarMenu(true,"Cadastrar Pedido","Cancelar Pedido","Listar Pedidos","Total de Vendas");
    $opValue = readline();
    switch($opValue){
        case 1:
            system('clear');
            print "+++ Pratos Disponíveis +++\n";
            arrayMenu(false,$dispoPratos);
            $cadPedido = new Pedido(readline("Qual o nome do Cliente que fez esse pedido?")
            ,readline("Qual o nome do Garçom que recebeu esse Pedido?")); 
            do{
                $prat = readline("Qual Prato o Cliente pediu?");
            }while(!validPrato($prat,$pratos,$cadPedido));//a própria funcao validPrato já seta o valor Prato do cadPedido
            // $cadPedido->setPrato(findPrato($prat,$pratos));
            $pedidos[] = $cadPedido;
            
        break;

        case 2:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                // foreach($pedidos as $key=>$pedido){
                //     print "\n[ID]- ".$key+1 ."\n". $pedido ."\n-----------";
                // }
                mostrarPedidos($pedidos);
                $opValue = readline();
                if($opValue > 0){
                    foreach($pedidos as $key => $pedido){
                        if($opValue == $key+1){
                            array_splice($pedidos,$key,1);//remove um item de uma array e reoorganiza na mesma funcao
                        }
                    }
                }
            }
        break;

        case 3:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                // foreach($pedidos as $key=>$pedido){
                //     print "\n[ID]- ".$key+1 ."\n". $pedido ."\n-----------";
                // }
                mostrarPedidos($pedidos);
                $opValue = readline();
            }
        break;

        case 4:
            $totalPed = 0;
            $totalPedVal = 0.00;
            foreach($pedidos as $pedido){
                $totalPed++;
                $totalPedVal += $pedido->getPrato()->getValor();
            }
            $totalPedVal = round($totalPedVal,2,PHP_ROUND_HALF_UP);
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                print "[Total de Pedidos]- ". $totalPed
                ."\n[Valor Total dos Pedidos]- ". $totalPedVal."\n";
                $opValue = readline();
            }
        break;
        case 0:
    
        break 2;
        default:
            print"\nESCOLHA UM VALOR DO MENU\n";
            sleep(2);
        break;
    }





}










function validPrato($prat,array $pratos, Pedido $ped ){

    foreach($pratos as $prato){
        if(strtolower($prat) == strtolower($prato->getNome()) or $prat == $prato->getNumero()){ 
            $ped->setPrato($prato);
            return true;
        }
    }


    return false;




}
// function findPrato($prat,array $pratos){

//     foreach($pratos as $prato){
//         if (strtolower($prat) == strtolower($prato->getNome()) or $prat == $prato->getNumero()) {
//             return $prato;
//         }
//     }
//     return null;
// }



function mostrarPedidos(array $pedidos){

    foreach($pedidos as $key=>$pedido){
        print "[ID]- ".$key+1 ."\n". $pedido ."\n-----------\n";
    }


} 





function listarPratos(array $pratos){
    $dispoPratos = [];
    foreach($pratos as $key=>$prato){
        $dispoPratos[] =(string)$prato;
        $prato->setNumero($key+1);
    }

    return $dispoPratos;
}

