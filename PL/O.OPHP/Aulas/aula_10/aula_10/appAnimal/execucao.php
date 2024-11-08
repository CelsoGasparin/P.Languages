<?php

require_once "model/Cachorro.php";
require_once "model/Gato.php";


$chacorro1 = new Cachorro('nomeLegalDeChacorro1','Cachorro?');
print $chacorro1->getDados();
print "\n".$chacorro1->Latir();
print "\n---------\n";
$chacorro2 = new Cachorro('nomeLegalDeChacorro2','Cachorro?');
print $chacorro2->getDados();
$chacorro2->Latir();
print "\n".$chacorro2->Latir();
print "\n---------\n";
$gato1 = new Gato('nomeLegalDeGato1','Gato?');
print $gato1->getDados();
$gato1->Miar();
print "\n".$gato1->Miar();
print "\n---------\n";
$gato2 = new Gato('nomeLegalDeGato2','Gato?');
print $gato2->getDados();
print "\n".$gato2->Miar()."\n";


