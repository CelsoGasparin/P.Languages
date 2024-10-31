<?php
require_once "model/Aluno.php";
require_once "model/Professor.php";

$aluno = new Aluno();
$aluno->setNome('nomeLegal');
$aluno->setIdade(700);
$aluno->setRg(123);
$aluno->setMatricula(123456);
print $aluno;
print "\n------------\n";
$prof = new Professor();
$prof->setNome('nomeLegal2');
$prof->setRg(456);
$prof->setIdade(007);
$prof->setSalario(1.50);
print $prof;



