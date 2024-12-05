<?php

require_once "model/Produto.php";
require_once "model/Balde.php";
require_once "model/Livro.php";
require_once "model/Computador.php";


$produto = new Produto('ProdutoLegal','idk');
$balde = new Balde(5000,'BaldeMuioLEGAL','L');
$computador = new Computador('processadorLegal','5Bytes','computadorZika','KILOS?');
$livro = new Livro('AutoDeLivroLegal','LivroMUITOLegal','Fahrenheit');

print $produto->getDados();
print "\n----------\n";
print $balde->getDados();
print "\n----------\n";
print $computador->getDados();
print "\n----------\n";
print $livro->getDados();