<?php


require_once 'model/ConsumidorResid.php';
require_once 'model/ConsumidorComer.php';
require_once 'model/ConsumidorIndu.php';
// require_once '/home/omelby/fun/all.php';
require_once '/home/lab/fun/menuFun.php';




$consumidor = null;
$tipos = ['Residencial','Comercial','Industrial'];
system('clear');
print"+++Qual seu tipo de Propriedade?+++\n";
arrayMenu(false,$tipos);
while(true){
    $opValue = readline();
    $escolha = strtolower($opValue);
    switch ($escolha) {
        case 'residencial':
            $consumidor = new Residencial();
        break 2;
        
        case 'comercial':
            $consumidor = new Comercial();
        break 2;

        case 'industrial':
            $consumidor = new Industrial();
        break 2;

        default:
            
        break;
    }


}

while(true){
    system('clear');
    montarMenu(true,'Registrar Consumo','Mostrar Fatura');

}

