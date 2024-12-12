<?php

require_once "model/Veiculo.php";
require_once "model/Carro.php";
require_once "model/Onibus.php";
require_once "model/MicroOnibus.php";
require_once "model/Van.php";
require_once "/home/lab/fun/montarMenu.php";
require_once "/home/lab/fun/texto.php";

$veiculos = ['Carro','Ônibus','Micro Ônibus','Van'];


while(true){
    system('clear');
    montarMenu(true,'Cadastrar viagem','Mostrar Viagens');
    $opValue = readline();
    switch(strtolower(clearString($opValue))){
        case 'cadastrar_viagem':
        case 1:
            while(true){
                system("clear");
                arrayMenu(false,$veiculos);
                $opValue = readline("Qual foi o veículo da Viagem?");
                foreach($veiculos as $key => $veiculo){
                    if(strtolower(clearString($opValue)) == strtolower(clearString($veiculo))){
                        $chosenVeiculo = clearString($veiculo);
                        break 2;
                    }
                }
                do{
                    $vFixo = readline("Qual foi o valor Fixo do Aluguel?");
                }while(!is_numeric($vFixo));
                do{
                    $KMviagem = readline('');
                }while(!is_numeric($KMviagem));
            }
            
        break;
        case 'mostrar_viagens':
        case 2:
            
        break;
        
        case 'sair':
        case 0:
        break 2;

        default:
        break;
    }
}

