<?php

require_once "model/radioPortatil.php";
require_once "model/radioRelogio.php";

//$tipo = "RP";
$tipo = "RR"; 


$radio = null;
if($tipo == "RP"){
    $radio = new RadioPortatil();
    $radio->setCor("Preto");
    $radio->setMarca("Livstar");
}elseif($tipo == "RR"){
    $radio = new RadioRelogio();
    $radio->setCorTela("Vermelho");    
}




$radio->ligarRadio();
if($radio instanceof iRelogio ){
    $radio->mostrarHora();
}
$radio->desligarRadio();






























