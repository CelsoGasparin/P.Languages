<?php


require_once "model/caneta.php";
require_once "model/CanetaAzul.php";
require_once "model/CanetaVermelha.php";

$caneta = new Caneta();
$canetaAzul = new CanetaAzul();
$canetaVermelha = new CanetaVermelha();

// $caneta->escreverPai();
$canetaAzul->escrever();
$canetaVermelha->escrever();