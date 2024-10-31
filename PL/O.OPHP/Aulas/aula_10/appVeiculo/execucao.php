<?php


require_once "model/CarroPasseio.php";
require_once "model/Onibus.php";
require_once "model/Caminhao.php";





$carroPasseio = new CarroPasseio("modeloDePasseio","Branco",123456789,5);
$onibus = new Onibus("modeloDeOnibus","Amarelo",2,64,5);
$caminhao = new Caminhao("modeloDeCaminhao","Cinza",150,1000,1.5);

print $carroPasseio->getDados();
print "\n--------\n";
print $onibus->getDados();
print "\n--------\n";
print $caminhao->getDados()."\n";



