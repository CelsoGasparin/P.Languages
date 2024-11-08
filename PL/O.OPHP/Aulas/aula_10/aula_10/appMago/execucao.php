<?php

require_once "model/Combatente.php";
require_once "model/Curandeiro.php";
require_once "model/Poder.php";//nem precisa chamar o Poder.php
require_once "/home/lab/fun/menuFun.php";


$poderesCurandeiro = [new Poder("Recupera energia",0)
                     ,new Poder("Recupera energia super",20)];


$poderesCombatente = [new Poder("Golpe normal",0)
                     ,new Poder("Golpe Especial",20)];

                     
$arrayPoderesCombatente = listResults($poderesCombatente,'getDescricao');
$arrayPoderesCurandeiro = listResults($poderesCurandeiro,'getDescricao');

$magos[0] = new Combatente();
$magos[0]->setNome("Davy Jones");
$magos[0]->setPoder($poderesCombatente[1]);
$magos[0]->setForcaDeAtaque(480.30);
$magos[1] = new Curandeiro();
$magos[1]->setNome("NomeLegal");
$magos[1]->setPoder($poderesCurandeiro[0]);
$magos[1]->setForcaDeCura(130.00);
// print $magos[0]->lancarPoder()."\n".$magos[1]->lancarPoder();

$comba = 'Combatente';
$hola = 'poderes'.$comba;

print_r($$hola);
die;
while(true){
    system('clear');
    montarMenu(true,"Criar Mago","Excluir Mago","Lançar Poder");
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
                $opValue = readline();
            }


        break;


        case 'excluir mago';
        case 2:
            
        break;

        case 'lançar poder';
        case 'lancar poder':
        case 3:
            
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
                    
                    




