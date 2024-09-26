<?php

require_once "model/Carro.php";
require_once "/home/lab/fun/menuFun.php";



$geralFabricantes = [
    new Fabricante("Volkswagem","VW"),
    new Fabricante("Chevrolet","GM"),
    new Fabricante("Fiat","F"),
    new Fabricante("Renault","RN"),  
];
$listaFabs = listarFabs($geralFabricantes);
$carros = [];

while(true){
    system('clear');
    montarMenu(true,"Cadastrar Carro","Excluir Carro","Listar Carros");
    $opValue = readline();

    switch($opValue){
        case 1:
            
            system('clear');
            print "+MARCAS DISPONÍVEIS+\n";
            arrayMenu(false,$listaFabs);
            $modelo = readline("Qual o modelo do Carro?");
            do{
                $anoFab = readline("Quando foi Fabricado?");
            }while(is_numeric($anoFab) == false);
            $carros[] = new Carro($modelo,$anoFab);

            do{
                $fabri = readline("Qual a Fabricante do Carro?");

                
            }while(validFab($fabri,$geralFabricantes) == false);


        break;
        
        case 2:
            
            do{
                system('clear');
                montarMenu(true);
                foreach($carros as $key=>$carro){
                    print "[ID]- ". $key+1 ."\n".$carro."\n--------\n";
                }
                $opValue = readline();
                if($opValue > 0 and is_numeric($opValue)){
                    unset($carros[$opValue-1]);
                    $carros = array_values($carros);
                }
            }while($opValue !=0);

        break;

        case 3:
            do{
                system('clear');
                montarMenu(true);
                foreach($carros as $carro){
                    print $carro."\n--------\n";
                }
                $opValue = readline();

            }while($opValue != 0);

        break;

        case 0:
        break 2;//break 2 pra sair do switch e do while

        default:
            print"\nESCOLHA UMA OPÇÃO DO MENU\n";
            sleep(3);          
        break;
    }

}







function listarFabs(array $fabs){
    $dispoFabs = [];
    foreach($fabs as $key=>$fab){
        $dispoFabs[] =(string)$fab;//(string) transforma $fab em uma string, basicamente chama o __toString
    }

    return $dispoFabs;

}
function findFab($fabri,array $fabs,Carro $carro){

    foreach($fabs as $key => $fabricante){
        if(strtolower($fabri) == strtolower($fabricante->getNome())
         or strtolower($fabri) == strtolower($fabricante->getSigla())
         or $fabri == $key+1 ){
            $carro->setFabricante($fabricante); 
            break;
        }
    }



}
function validFab($fab, array $fabs){
    foreach($fabs as $key => $fabricante){
        if(strtolower($fab) == strtolower($fabricante->getNome()) 
        or strtolower($fab) == strtolower($fabricante->getSigla()) 
        or $fab == $key+1 ){
            return true;
        }
    }
    return false;
}







