<?php

require_once "model/Hotel.php"; 
require_once "model/Restaurante.php";
require_once "model/PontoTuristico.php";
// require_once "/home/lab/fun/menuFun.php";
require_once "/home/omelby/fun/menuFun.php";

$espacos = [];
$iFake = 0;

while(true){
    system('clear');
    montarMenu(true,"Cadastrar Espaço","Excluir Espaço","Listar Espaços");
    $opValue = readline();
    $opValue = strtolower($opValue);
    switch($opValue){
        case 'cadastrar espaço':
        case 'cadastrar espaco':
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
                        if($cafeInc == 1){
                            $hotel->setCafeIncluso(true);
                        }else{
                            $hotel->setCafeIncluso(false);
                        }

                        $espacos[AtualizarIndex($iFake)] = $hotel;
                        
                    break 2;


                    case 'restaurante':
                    case 2:
                        system('clear');
                        $restaurante = new Restaurante();
                        $restaurante->setNome(readline("Qual o nome do Restaurante?"));
                        $restaurante->setEndereco(readline("Qual o endereço do Restaurante?"));
                        $restaurante->setTipoComida(readline("Qual o tipo de comida desse Restaurante?"));
                        
                        $espacos[AtualizarIndex($iFake)] = $restaurante;
        
                    break 2;
                    
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
                        
                        $espacos[AtualizarIndex($iFake)] = $pontoTur;    


                    break 2;


                    case 0:
                    
                    break 2;
                    
                    default:
                    break;
                }
                
            }
        break;
        
        case 'excluir espaço':
        case 'excluir espaco':
        case 2:
            
            while(true){
                system('clear');
                montarMenu(true);
                foreach($espacos as $key=>$espaco){
                    if($espaco instanceof Hotel){
                        print "++HOTEL++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosHotel(); 
                    }elseif($espaco instanceof Restaurante){
                        print"++RESTAURANTE++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosRestaurante();
                    }elseif($espaco instanceof PontoTuristico){
                        print"++PONTO TURÍSTICO++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosPontoTuristico();
                    }
                    print "\n------------\n";
                }
                $opValue = readline();
                $opValue = strtolower($opValue);
                switch ($opValue) {
                    case 'sair':
                    case 0:
                        
                    break 2;
                    
                    default:
                        if($opValue > 0 and $opValue <= count($espacos)){
                            array_splice($espacos,$opValue-1,1);
                            $espacos = OrganizarIndex($espacos);
                            $iFake--;
                        }
                    break;
                }
            }



        break;

        case 'listar espaços':
        case 'listar espacos':
        case 3:
            while(true){
                system('clear');
                montarMenu(true);
                foreach($espacos as $key=>$espaco){
                    if($espaco instanceof Hotel){
                        print "++HOTEL++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosHotel(); 
                    }elseif($espaco instanceof Restaurante){
                        print"++RESTAURANTE++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosRestaurante();
                    }elseif($espaco instanceof PontoTuristico){
                        print"++PONTO TURÍSTICO++\n";
                        print "[ID]- ".$key."\n";
                        print $espaco->getDadosPontoTuristico();
                    }
                    print "\n------------\n";
                }
                $opValue = readline();     
                if($opValue == 0){
                    break;
                }
            }
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



function AtualizarIndex(&$ind){
    $ind++;
    return $ind;
}
function OrganizarIndex($array){
    $arrayCorreto = [];
    foreach($array as $key => $value){
        $arrayCorreto[$key+1] = $value;
    }
    return $arrayCorreto;
}