<?php

require_once "model/Circulo.php";
require_once "model/Rectangulo.php";
require_once "model/Quadrado.php";
require_once "/home/lab/fun/menuFun.php";

// $dispoFormas = ['Circulo','Rectangulo','Quadrado'];

// $forma = null;


// do{
//   system('clear');
//   arrayMenu(false ,$dispoFormas);
//   print"Escolha uma das Formas\n";
//   $cadforma = readline();  
// }while(validForma($cadforma,$dispoFormas) == null);
// $cadforma = strtolower($cadforma);
// system("clear");
// switch($cadforma){
//     case 'circulo':
//         $forma = new Circulo();
//         do{
//             $forma->setRaio(readline("Qual o raio do seu circulo?"));
//         }while(!is_numeric($forma->getRaio()));
//     break;
//     case 'rectangulo':
//         $forma = new Rectangulo();
//         do{
//             $forma->setBase(readline("Qual a base do seu Rectangulo?"));
//         }while(!is_numeric($forma->getBase()));
//         do{
//             $forma->setAltura(readline("Qual a altura do seu Rectangulo?"));
//         }while(!is_numeric($forma->getAltura()));
//     break;
//     case 'quadrado':
//         $forma = new Quadrado();
//         do{
//             $forma->setLado(readline("Qual o tamanho dos lados do seu Quadrado?"));
//         }while(!is_numeric($forma->getLado()));
//     break;
// }
$forma = null;
$forma = escolherForma();



while(true){
    system("clear");
    montarMenu(true,"Desenhar Forma","Mostrar Area","Reescolher Forma");
    $opValue = readline();
    switch($opValue){
        case 1:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                print $forma->getDesenho();
                $opValue = readline();
            }
        break;
        case 2:
            while($opValue != 0){
                system('clear');
                montarMenu(true);
                print "[Área]- ".$forma->getArea();
                $opValue = readline();
            }

        break;
        case 3:
            while($opValue != 0){
                system('clear');
                montarMenu(true,"Sim, Tenho certeza.");
                print "Tem certeza que quer Reescolher sua Forma?";
                $opValue = readline();
                if($opValue == 1){
                    $forma = escolherForma();
                    break;
                }
            }
        break;
        case 0 :
        break 2;
        default:
            print "ESCOLHE UMA OPÇÃO";
            sleep(2);
        break;
    }
}







function validForma(&$for,$formas){

    foreach($formas as $key=>$forma){
        if(strtolower($for) == strtolower($forma)
         or $for == $key+1 ){
            $for = $forma;
            return $forma;
        }
    }
    return null;



}

function escolherForma(){
    $dispoFormas = ['Circulo','Rectangulo','Quadrado'];



    $forma = null;


    do{
        system('clear');
        arrayMenu(false ,$dispoFormas);
        print"Escolha uma das Formas\n";
        $cadforma = readline();  
    }while(validForma($cadforma,$dispoFormas) == null);
    $cadforma = strtolower($cadforma);
    system("clear");
    switch($cadforma){
        case 'circulo':
            $forma = new Circulo();
            do{
                $forma->setRaio(readline("Qual o raio do seu circulo?"));
            }while(!is_numeric($forma->getRaio()));
        break;
        case 'rectangulo':
            $forma = new Rectangulo();
            do{
                $forma->setBase(readline("Qual a base do seu Rectangulo?"));
            }while(!is_numeric($forma->getBase()));
            do{
                $forma->setAltura(readline("Qual a altura do seu Rectangulo?"));
            }while(!is_numeric($forma->getAltura()));
        break;
        case 'quadrado':
            $forma = new Quadrado();
            do{
                $forma->setLado(readline("Qual o tamanho dos lados do seu Quadrado?"));
            }while(!is_numeric($forma->getLado()));
        break;

    
    }
    return $forma;
}


