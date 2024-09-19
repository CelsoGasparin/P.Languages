<?php

require_once 'model/Jogador.php';
//require_once 'model/Time.php';

//1-criar objeto Time

$time = new Time();
$time->setNome("nomeLegal");
$time->setCidade("Pintópolis-MG");
//print_r($time);



//2-Criar objeto jogador
$jog1 = new Jogador();
$jog1->setNome("Ser Humano");
$jog1->setNumero(9);
$jog1->setTime($time);

$jog2 = new Jogador();
$jog2->setNome("Ser Humano2");
$jog2->setNumero(4);
$jog2->setTime($time);
//print_r($jog1);

$time->setJogadores([]);
//$time->getJogadores()[] = $jog1;
//$time->getJogadores()[] = $jog2;
$jogadores[] = $jog1;
$jogadores[] = $jog2;
$time->setJogadores($jogadores);


print_r($time);
//3- Imprimir o nome do time do jogador
//print $jog1->getTime()->getNome();

