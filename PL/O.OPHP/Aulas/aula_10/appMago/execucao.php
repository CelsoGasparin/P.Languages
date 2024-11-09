<?php

require_once "model/Combatente.php";
require_once "model/Curandeiro.php";
require_once "model/Poder.php";//nem precisa chamar o Poder.php
// require_once "/home/lab/fun/menuFun.php";
require_once "/home/omelby/fun/menuFun.php";


$poderesCurandeiro = [new Poder("Recupera energia",0)
                     ,new Poder("Recupera energia super",20)];
$poderesCurandeiro = OrganizarListaPoder($poderesCurandeiro);


$poderesCombatente = [new Poder("Golpe normal",0)
                     ,new Poder("Golpe Especial",20)];
$poderesCombatente = OrganizarListaPoder($poderesCombatente);


$reflecs = [];
foreach(listSubclasses('Mago') as $key=>$SubC){
    $reflecs[$SubC] = new ReflectionClass($SubC);
}

// print($reflecs['Combatente']->getProperties()[0]->getName());



$magos[1] = new Combatente();
$magos[1]->setNome("Davy Jones");
$magos[1]->setPoder($poderesCombatente['Golpe Especial']);
$magos[1]->setForcaDeAtaque(480.30);
$magos[2] = new Curandeiro();
$magos[2]->setNome("NomeLegal");
$magos[2]->setPoder($poderesCurandeiro['Recupera energia']);
$magos[2]->setForcaDeCura(130.00);
$iFake = 2;
// print $magos[1]->lancarPoder()."\n".$magos[2]->lancarPoder();

// $comba = 'Combatente';
// $hola = 'poderes'.$comba;

// print_r($$hola);


while(true){
    system('clear');
    montarMenu(true,"Criar Mago","Excluir Mago","Lançar Poder","Listar Magos");
    $opValue = readline();
    $opValue = strtolower($opValue);
    switch($opValue){
        case 'criar mago';
        case 1:
            while(true){
                system('clear');
                print"++ESCOLHA UMA SUBCLASSE++\n";
                arrayMenu(true,listSubclasses('Mago'));
                print"AVISO!Digite o nome da SubClasse(e é case-sensetive).\n";
                $opValue = readline();
                if(in_array($opValue,listSubclasses('Mago'))){
                    $SubClasse = $opValue;
                    $SubClassePoderes = "poderes".$SubClasse;
                    break;
                }elseif($opValue == 0 or $opValue == "Sair"){
                    break 2;
                }
            }
            $nome = readline("Qual o nome do seu Mago?");
            
            while(true){
                system('clear');
                arrayMenu(false,listResults($$SubClassePoderes,'getPoderDescricao'));
                print"AVISO!Digite o nome do Poder(e é case-sensetive).\n";
                $opValue = readline();
                if(in_array($opValue,listResults($$SubClassePoderes,'getDescricao'))){
                    $poder = $opValue;
                    break;
                }
            }
            system('clear');
            do{
                $forca = readline("Qual a força do seu mago?");
            }while(!is_numeric($forca));
            $iFake++;
            $magos[$iFake] = new $SubClasse();
            $magos[$iFake]->setNome($nome);
            $magos[$iFake]->setPoder($$SubClassePoderes[$poder]);
            $setForca = 'set'.$reflecs[$SubClasse]->getProperties()[0]->getName();
            $magos[$iFake]->$setForca($forca);
            
        break;


        case 'excluir mago';
        case 2:
            while(true){
                system('clear');
                montarMenu(true);
                foreach($magos as $key=>$mago){
                    $getForca = 'get'.$reflecs[get_class($mago)]->getProperties()[0]->getName();
                    print"++".get_class($mago)."++\n[ID]- ".$key;
                    print"\n[Nome]- ".$mago->getNome().
                    "\n[NomeDoAtaque]- ".$mago->getPoder()->getDescricao().
                    "\n[ForçaDoAtaque]- ".$mago->getPoder()->getForca()."% de dano adcional".
                    "\n[ForçaDoMago]- ".$mago->$getForca().
                    "\n[ForçaTotal]- ".$mago->getPoder()->getForcaTotal($mago->$getForca());
                    print "\n-----------\n";
                }
                print"AVISO!Escolha o ID do Mago para exclui-lo\n";
                $opValue = readline();
                switch($opValue){
                    case 'Sair':
                    case 0:
                        
                    break 2;
                    
                    default:
                        if($opValue > 0 and $opValue <= count($magos)){
                            array_splice($magos,$opValue-1,1);
                            $magos = OrganizarIndex($magos);
                            $iFake--;
                        }
                    break;
                }
            }
        break;

        case 'lançar poder';
        case 'lancar poder':
        case 3:
            while(true){
                system('clear');
                montarMenu(true);
                foreach($magos as $key=>$mago){
                    $getForca = 'get'.$reflecs[get_class($mago)]->getProperties()[0]->getName();
                    print"++".get_class($mago)."++\n[ID]- ".$key;
                    print"\n[Nome]- ".$mago->getNome().
                    "\n[NomeDoAtaque]- ".$mago->getPoder()->getDescricao().
                    "\n[ForçaDoAtaque]- ".$mago->getPoder()->getForca()."% de dano adcional".
                    "\n[ForçaDoMago]- ".$mago->$getForca().
                    "\n[ForçaTotal]- ".$mago->getPoder()->getForcaTotal($mago->$getForca());
                    print "\n-----------\n";
                }
                print"AVISO!Escolha o ID do Mago para Lançar o Poder\n";
                $opValue = readline();
                switch($opValue){
                    case 'Sair':
                    case 0:
                        
                    break 2;
                    
                    default:
                        if($opValue > 0 and $opValue <= count($magos)){
                            do{
                                system('clear');
                                montarMenu(true);
                                print $magos[$opValue]->lancarPoder()."\n";
                                
                                $opValue = readline();
                            }while($opValue != 0);
                            
                        }
                    break;
                }
            }
        break;

        
        case'listar magos':
        case 4:
            do{
                system('clear');
                montarMenu(true);
                foreach($magos as $key=>$mago){
                    $getForca = 'get'.$reflecs[get_class($mago)]->getProperties()[0]->getName();
                    print"++".get_class($mago)."++\n[ID]- ".$key;
                    print"\n[Nome]- ".$mago->getNome().
                    "\n[NomeDoAtaque]- ".$mago->getPoder()->getDescricao().
                    "\n[ForçaDoAtaque]- ".$mago->getPoder()->getForca()."% de dano adcional".
                    "\n[ForçaDoMago]- ".$mago->$getForca().
                    "\n[ForçaTotal]- ".$mago->getPoder()->getForcaTotal($mago->$getForca());
                    print "\n-----------\n";
                }
                $opValue = readline();
            }while($opValue!=0);




        break;


        case 'sair':
        case 0:

        break 2;
    }                     
}


function listResults(array $objectList,string $getValue){
    foreach($objectList as $object){
        $lista[] = $object->$getValue();
    }
    return $lista;
}
                    
function listSubclasses(string $classPai){
    $allClasses = get_declared_classes();
    foreach($allClasses as $class){
        if(is_subclass_of($class,$classPai)){
            $allSubClasses[] = $class;
        }
    }
    return $allSubClasses;
}
function organizarIndex($array){
    $actualArray = [];
    foreach($array as $key=>$value){
        $actualArray[$key+1] = $value;
    }
    return $actualArray;

}
function OrganizarListaPoder($poderes){
    $actualLista = [];
    foreach($poderes as $key=>$poder){
        $actualLista[$poder->getDescricao()] = $poder;
    }
    return $actualLista;

}                    
                    