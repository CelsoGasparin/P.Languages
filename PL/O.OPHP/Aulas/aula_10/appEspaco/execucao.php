<?php

require_once "model/Hotel.php"; 
require_once "model/Restaurante.php";
require_once "model/PontoTuristico.php";
require_once "/home/lab/fun/menuFun.php";


$espacos = [];
$ind = 0;

while(true){
    system('clear');
    montarMenu(true,"Cadastrar Espaço","Excluir Espaço","Listar Espaços");
    $opValue = readline();
    $opValue = strtolower($opValue);
    switch($opValue){
        case 'cadastrar espaço':
        case 1:
            while(true){
                system('clear');
                print"+++QUE TIPO DE ESPAÇO VOCÊ ESTÀ CADASTRANDO?+++\n";
                montarMenu(true,'Hotel','Restaurante','Ponto Turístico');
                $opValue = readline();
                $opValue = strtolower($opValue);
                switch($opValue){

                    case 'hotel':
                    case 1:
                        system('clear');
                        $hotel = new Hotel();
                        $hotel->setNome(readline("Qual o nome do Hotel?"));
                        $hotel->setEndereco(readline("Qual o endereço do Hotel"));
                        
                        do{
                            $hotel->setNumEstrelas(readline("Quantas estrelas tem o Hotel?(Escreva em números)"));
                        }while(!($hotel->getNumEstrelas() >= 0 && $hotel->getNumEstrelas() <= 5));
                        do{
                            $cafeInc = readline("Este Hotel tem Café Incluso?\n{1-SIM}\n{2-NÃO}\n");
                        }while($cafeInc != 1 && $cafeInc != 2);
                        $espacos[array_count_values($espacos+1)] = $hotel;
                        
                    break 2;


                    case 'restaurante':
                    case 2:
                        system('clear');
                        $restaurante = new Restaurante();
                        $restaurante->setNome(readline("Qual o nome do Restaurante?"));
                        $restaurante->setEndereco(readline("Qual o endereço do Restaurante?"));
                        $restaurante->setTipoComida(readline("Qual o tipo de comida desse Restaurante?"));
                        
                        $espacos[count($espacos+1)] = $restaurante;
        
                    break;
                    
                    case 'ponto turístico':
                    case 'ponto turistico':
                    case 3:
                        system('clear');
                        $pontoTur = new PontoTuristico();
                        $pontoTur->setNome(readline("Qual o nome do Lugar?"));
                        $pontoTur->setEndereco(readline("Qual o endereço do Lugar?"));
                        do{
                            $pontoTur->setDuracaoDaVista(readline("Quanto tempo vai durar a visita?(EM HORAS H)"));  
                        }while(!is_numeric($pontoTur->getDuracaoDaVista()));
                        
                        $espacos[array_count_values($espacos+1)] = $pontoTur;    


                    break;


                    case 0:
                    
                    break 2;
                    
                    default:
                    break;
                }
                
            }
        break;
        
        case 'excluir espaço':
        case 2:
                
        break;

        case 'listar espaços':
        case 3:
                
        break;

        case 0:
        case 'sair':

        break 2;

        default:
            print "\nESCOLHA UMA OPÇÃO";
            sleep(2);
        break;
    }
}



function AtualizarIndex($ind){
    $ind++;
    return $ind;
}
