<?php


require_once "model/Personagem.php";
require_once "model/Classe.php";
require_once "model/Subclasse.php";
require_once "model/Poder.php";
require_once "model/Arma.php";
require_once "util/Connection.php";
require_once "util/menuFun.php";
require_once "util/texto.php";




$classes = [new Classe("Mago"),
            new Classe("Lutador"),
            new Classe("Assasino")];
$classes = organizeObjectArray($classes,"getDescricao");

$subclasses = [new Subclasse($classes['Mago'],'Healer'),
               new Subclasse($classes['Mago'],'Mago de Fogo'),
               new Subclasse($classes['Mago'],'Necromante'),
               new Subclasse($classes['Lutador'],"Cavaleiro"),
               new Subclasse($classes['Lutador'],'Martial Artist'),
               new Subclasse($classes['Lutador'],'Besta'),
               new Subclasse($classes['Assasino'],'Mercenário'),
               new Subclasse($classes['Assasino'],'Arqueiro')];

$subclasses = organizeObjectArray($subclasses,'getNome');



$poderesMago = [new Poder('Golpe Normal',30,'Atacar','MAG'),
                new Poder('Golpe Especial',45,'Atacar','MAG')];
$poderesMago = organizeObjectArray($poderesMago,'getDescricao');
$poderesLutador = [new Poder('Soco Normal',30,'Atacar','STR'),
                   new Poder('Soco Especial',45,'Atacar','STR')];
$poderesLutador = organizeObjectArray($poderesLutador,'getDescricao');
$poderesAssasino = [new Poder('Corte Rápido',30,'Atacar','DEX'),
                    new Poder('Corte Profundo',45,'Atacar','DEX')];
$poderesAssasino = organizeObjectArray($poderesAssasino,'getDescricao');



$poderesHealer = [new Poder('Cura Normal',35,'Curar','MAG'),
                  new Poder('Cura Especial',75,'Curar','MAG')];
$poderesMago_de_Fogo = [new Poder('Bola de Fogo',115,'Atacar','MAG'),
                        new Poder('Flecha de Fogo',90,'Atacar','MAG')];
$poderesNecromante = [new Poder('Summonar Mortos',60,'Atacar','NAG'),
                      new Poder('Magia Negra',150,'Atacar','MAG')];
$poderesHealer = organizeObjectArray($poderesHealer,'getDescricao');
$poderesMago_de_Fogo = organizeObjectArray($poderesMago_de_Fogo,'getDescricao');
$poderesNecromante = organizeObjectArray($poderesNecromante,'getDescricao');



$poderesCavaleiro = [new Poder('Tratar Feridas',30,'Curar','DEX'),
                     new Poder('Corte Profundo',60,'Atacar','STR')];
$poderesMartial_Artist = [new Poder('Chute Rápido',100,'Atacar','DEX'),
                          new Poder('Chute Pesado',120,'Atacar','STR')];
$poderesBesta = [new Poder('Corte com Garras',100,'Atacar','STR'),
                 new Poder('Mordida',160,'Atacar','STR')];
$poderesCavaleiro = organizeObjectArray($poderesCavaleiro,'getDescricao');
$poderesMartial_Artist = organizeObjectArray($poderesMartial_Artist,'getDescricao');
$poderesBesta = organizeObjectArray($poderesBesta,'getDescricao');



$poderesMercenario = [new Poder('Tratar Feridas',45,'Curar','DEX'),
                      new Poder('Atacar pelas Sombras',120,'Atacar','DEX')];
$poderesArqueiro = [new Poder('Flecha Normal',65,'Atacar','DEX'),
                    new Poder('Flecha com Veneno',140,'Atacar','DEX')];
$poderesMercenario = organizeObjectArray($poderesMercenario,'getDescricao');
$poderesArqueiro = organizeObjectArray($poderesArqueiro,'getDescricao');



$armas = [new Arma('Espada Comum',65,0,null,'STR'),
          new Arma('Espada Pesada',80,1,$poderesCavaleiro['Corte Profundo'],'STR'),
          new Arma('Excalibur',200,3,new Poder('Corte Sagrado',400,'Atacar','STR'),'STR'),
          new Arma('Cajado Simples',25,0,null,'MAG'),
          new Arma('Cajado de Fogo',25,1,$poderesMago_de_Fogo['Bola de Fogo'],'MAG'),
          new Arma('Cajado de Gelo',25,1,new Poder('Tempestade de Neve',120,'Atacar','MAG'),'MAG'),
          new Arma('Cajado do Poder',25,3,new Poder('Chuva de Meteoros',350,'Atacar','MAG'),'MAG'),
          new Arma('Faca Simples',65,0,null,'DEX'),
          new Arma('Faca Mágica',65,2,new Poder('Corte Mágico',130,'Atacar','MAG'),'DEX'),
          new Arma('Arco Simples',15,0,$poderesArqueiro['Flecha Normal'],'DEX'),
          new Arma('Arco Mágico',15,1,new Poder('Flecha de Mana',135,'Atacar','MAG'),'DEX'),
          new Arma('Arco de Fogo',15,2,$poderesMago_de_Fogo['Flecha de Fogo'],'DEX'),
          new Arma('Arco Amaldiçoado',15,2,new Poder('Flecha Amaldiçoada',150,'Atacar','DEX'),'DEX'),
          new Arma('Arco do Dragão',15,4,new Poder('Flecha Dracônica',500,'Atacar','MAG'),'DEX'),
          new Arma('PISTOLA',45,8,new Poder('Bala',1000,'Atacar','DEX'),'STR'),
          new Arma('Relíquia de Morte',160,10,new Poder('Espiral Descendente',413,'Atacar','STR'),'STR')];
$armas = organizeObjectArray($armas,'getDescricao');




$personagemAtual = null;

while(true){
    system('clear');
    Menu::montarMenu(true,'Cadastrar Personagem','Listar Personagens','Buscar Personagem','Remover Personagem');
    $opValue = readline();
    switch(strtolower(clearString($opValue))){
        case 'cadastrar_personagem':
        case 1:
            system('clear');
            $nome = readline('Qual o nome do seu Personagem?');
            $subStrings = returnMethodArray($subclasses,'getExplicacao');
            while(true){
                system('clear');
                Menu::arrayMenu(false,$subStrings);
                $opValue = readline();
                foreach($subStrings as $key => $value){
                    if(strtolower(clearString($opValue)) == strtolower(clearString($value))){
                        $class = $subclasses[$value];
                        break 2;
                    }
                }
            }
            $statMax = $class == 'Assasino' ? 6 : 4;
            $statLim = $class == 'Assasino' ? 4 : 3;
            $STR = 1;
            $CON = 1;
            $DEX = 1;
            $MAG = 1;
            $statPrint = 'STR';
            while(true){
                system('clear');
                print"+++DETERMINE OS STATS DO SEU PERSONAGEM+++";
                montarMenu(false,"STR- $STR","CON- $CON","DEX- $DEX","MAG- $MAG");
                do{
                    $$statPrint = readline();
                }while(($$statPrint > $statLim or $$statPrint < 1) or $statMax-$$statPrint+1 < 0);
                $statMax-$$statPrint+1 >= 0 ? $statMax -= $$statPrint-1: null; 
            }
            
        break;

        case 'listar_personagens':
        case 2:
                
        break;

        case 'buscar_personagem':
        case 3:
                
        break;

        case 'remover_personagem':
        case 4:
                
        break;

        case'sair':
        case 0:
        break 2;
        
        default:
        break;
    }
}



















function trocarStat(&$stat){
    $stat == 'STR' ? $stat = 'CON':($stat == 'CON' ? $stat = 'DEX':($stat == 'DEX'? $stat = 'MAG': $stat = 'STR'));
}







function organizeObjectArray(array $array ,string $method){
    $actualArray = [];
    foreach($array as $key=>$arrayValue) {
        $actualArray[$arrayValue->$method()] = $arrayValue;
    }
    return $actualArray;
}

function returnMethodArray(array $array ,string $metodo){
    $actualArray = [];
    foreach($array as $key => $valueArray){
        $actualArray[] = $valueArray->$metodo();
    }
    return $actualArray;
}

function constructPBD($BD){
    $poderesNomes = unserialize($BD['poderes']);
    foreach($GLOBALS['subclasses'] as $key => $class) {
        if($class->getNome() == $BD['classe']){
            $actualClass = $class;
            break;
        }
    }
    $poderes = [];

    foreach($poderesNomes as $keyP => $poderNome){
        foreach($GLOBALS['poderes'.clearString($actualClass->getNome())] as $keyS => $classPoder){
            if($poderNome == $classPoder->getDescricao()){
                $poderes[] = $classPoder;
                break;
            }
        } 
        foreach($GLOBALS['poderes'.clearString($actualClass->getDescricao())] as $keyC => $classPoder) {
            if($poderNome == $classPoder->getDescricao()){
                $poderes[] = $classPoder;
                break;
            }
        }
    }
    $poderes = organizeObjectArray($poderes,'getDescricao');
    $aEq = null;
    foreach($GLOBALS['armas'] as $keyA => $arma){
        if($arma->getDescricao() == $BD['armaEquipada']){
            $aEq = $arma;
            break;
        }
    }
    return new Personagem($BD['STR'],$BD['CON'],$BD['DEX'],$BD['MAG'],$BD['nome'],$BD['classe'],$poderes,$aEq,true,$BD['HP']);
}

















