<?php

require_once 'model/Cidade.php'; 


$SC = new Estado("Santa Catarina",'SC');
$PR = new Estado("Paraná",'PR');


$flori = new Cidade("Florianópolis",537211, 3,$SC);
$blum = new Cidade("Blumenau",380597,21,$SC);
$foz = new Cidade("Foz do Iguaçu",285415, 164,$PR);
$casc = new Cidade("Cascavel",364104, 781,$PR);

$cidades = [];

$cidades[] = $flori;
$cidades[] = $blum;
$cidades[] = $foz;
$cidades[] = $casc;

foreach($cidades as $cidade){

    print "A cidade de ". $cidade->getNome() ." localizada no Estado ". $cidade->getEstado()->getNome()."-". 
    $cidade->getEstado()->getSigla() .", possui ". $cidade->getQtdHabitantes() ." Habitantes e uma altitude de "
    . $cidade->getAltitude()." metros.";
    print"\n------------------------------\n";


}








