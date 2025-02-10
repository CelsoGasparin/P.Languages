<?php


require_once "model/Personagem.php";
require_once "model/Classe.php";
require_once "model/Subclasse.php";
require_once "model/Poder.php";
require_once "model/Arma.php";
require_once "util/Connection.php";
require_once "util/menuFun.php";
require_once "util/texto.php";
require_once "dao/PersonagemDAO.php";




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




// $personagemAtual = null;

// print_r(PersonagemDAO::listarPersonagens());


// die;

while(true){
    system('clear');
    Menu::montarMenu(true,'Cadastrar Personagem','Listar Personagens','Buscar Personagem','Remover Personagem');
    $opValue = readline();
    switch(strtolower(texto::clearString($opValue))){
        case 'cadastrar_personagem':
        case 1:
            system('clear');
            $nome = readline('Qual o nome do seu Personagem?');
            $subStrings = returnMethodArray($subclasses,'getExplicacao');
            while(true){
                system('clear');
                Menu::arrayMenu(false,$subStrings);
                $opValue = readline();
                foreach(returnMethodArray($subclasses,'getNome') as $key => $value){
                    print "oi";
                    if(strtolower(texto::clearString($opValue)) == strtolower(texto::clearString($value))){
                        $class = $subclasses[$value];
                        break 2;
                    }
                }
            }
            $statMax = $class->getDescricao() == 'Assasino' ? 6 : 4;
            $statLim = $class->getDescricao() == 'Assasino' ? 4 : 3;
            $STR = 1;
            $CON = 1;
            $DEX = 1;
            $MAG = 1;
            $statPrint = 'STR';
            while(true){
                system('clear');
                print"+++DETERMINE OS STATS DO SEU PERSONAGEM+++";
                Menu::montarMenu(false,"STR- $STR","CON- $CON","DEX- $DEX","MAG- $MAG");
                print "A Quantidade de Pontos que você tem para gastar é ".$statMax;
                print "\nO Máximo de pontos que um Status pode ter é ".$statLim."\n";
                do{
                    $$statPrint = readline($statPrint.'- ');
                }while(($$statPrint > $statLim or $$statPrint < 1) or $statMax-$$statPrint+1 < 0);
                $statMax-$$statPrint+1 >= 0 ? $statMax -= $$statPrint-1: null;
                trocarStat($statPrint);
                if($statPrint == null and $statMax > 0){
                    while(true){
                        system('clear');
                        Menu::montarMenu(true,'AVISO!Você não definiu os status corretamente,por favor use todos os seu pontos.');
                        $opValue = readline();
                        if($opValue == 0){
                            $STR = 1;
                            $CON = 1;
                            $DEX = 1;
                            $MAG = 1;
                            $statMax = $class->getDescricao() == 'Assasino' ? 6 : 4;
                            $statPrint = "STR";
                            break;
                        }
                    }

                }elseif($statPrint == null and $statMax <= 0){
                    break;
                }
            }
            system('clear');
            do{
                print"Você quer que seu Personagem tenha uma Arma?\n1-SIM\n2-NÃO\n";
                $opValue = readline();
                if($opValue == 1){
                    while(true){
                        system('clear');
                        Menu::arrayMenu(false,returnMethodArray($armas,'getExplicacao'));
                        print "AVISO!Você precisa escrever o nome da arma!(não é case-sensitive)\n";
                        $opValue = readline();
                        foreach($armas as $key=>$arma){
                            if(strtolower(texto::clearString($opValue)) == strtolower(texto::clearString($arma->getDescricao()))){
                                $armaEQ = $arma;
                                break 3;
                            }
                        }
                    }
                }else{
                    $armaEQ = null;
                }
            }while($opValue != 2);
            $podsSubSkills = $class->getAllSubSkills();
            $podsSkills = $class->getAllSkills();
            $DispoSkills = array_merge($$podsSubSkills,$$podsSkills);
            $listaDispoSkills = returnMethodArray($DispoSkills,'getDescricao');
            $pods = [];
            do{
                system('clear');
                print"+++ESCOLHA TRÊS HABILIDADES+++\n";
                Menu::arrayMenu(false,$listaDispoSkills);
                print"AVISO!Você precisa escrever o nome da Habilidade.(não é case-sensitive)\n";
                $opValue = readline();
                foreach($DispoSkills as $key=>$skillDispo){
                    if(strtolower(texto::clearString($opValue)) == strtolower(texto::clearString($skillDispo->getDescricao()))){
                        $pods[] = $skillDispo;
                    }
                }
            }while(count($pods) < 3);


            PersonagemDAO::insertPersonagem(new Personagem($STR,$CON,$DEX,$MAG,$nome,$class,$pods,$armaEQ));
            // die;

        break;

        case 'listar_personagens':
        case 2:
            while(true){
                system('clear');
                Menu::montarMenu(true);
                foreach(PersonagemDAO::listarPersonagens() as $key => $perso){
                    print constructPBD($perso);
                    print "\n--------\n";
                }
                $opValue = readline();
                if($opValue == 0){
                    break;
                }
            }
        break;

        case 'buscar_personagem':
        case 3:
            while($opValue != 0){
                system('clear');
                Menu::montarMenu(true,'Digite o Nome ou o ID do Personagem que você quer Buscar.//prioridade pro ID');
                $opValue = readline();
                if($char = PersonagemDAO::buscarCliente($opValue)){
                    system('clear');
                    Menu::montarMenu(false,"Pressione qualquer telca para sair(TEM QUE DAR ENTER).");
                    print constructPBD($char)."\n";
                    readline();
                }elseif($opValue != 0){
                    print"DIGITE UM VALOR VÁLIDO!";
                    sleep(2);
                }
            }




        break;

        case 'remover_personagem':
        case 4:
            while($opValue != 0){
                system('clear');
                Menu::montarMenu(true,'Digite o ID do Personagem que você quer Remover.');
                $opValue = readline();
                if($char = PersonagemDAO::buscarCliente($opValue)){
                    while(true){
                        system('clear');
                        Menu::montarMenu(true,"Tem certeza que quer Remover este Personagem?");
                        print constructPBD($char)."\n---------\n";
                        $deleteValue = readline();
                        if($deleteValue == 1){
                            PersonagemDAO::excluirCliente($char['id']);
                            break 2;
                        }elseif($deleteValue == 0){
                            break;
                        }

                    }
                }elseif($opValue != 0){
                    print"DIGITE UM VALOR VÁLIDO!";
                    sleep(2);
                }
            }

                
        break;

        case'sair':
        case 0:
        break 2;
        
        default:
        break;
    }
}



















function trocarStat(&$stat){
    $stat == 'STR' ? $stat = 'CON':($stat == 'CON' ? $stat = 'DEX':($stat == 'DEX'? $stat = 'MAG': $stat = null));
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
        foreach($GLOBALS['poderes'.texto::clearString($actualClass->getNome())] as $keyS => $classPoder){
            if($poderNome == $classPoder->getDescricao()){
                $poderes[] = $classPoder;
                break;
            }
        } 
        foreach($GLOBALS['poderes'.texto::clearString($actualClass->getDescricao())] as $keyC => $classPoder) {
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
    return new Personagem($BD['STR'],$BD['CON'],$BD['DEX'],$BD['MAG'],$BD['nome'],$actualClass,$poderes,$aEq,true,$BD['HP'],id: $BD['id']);
}

















