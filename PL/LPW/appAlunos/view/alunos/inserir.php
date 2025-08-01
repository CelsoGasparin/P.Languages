<?php
require_once __DIR__.'/../../controller/AlunoController.php';
require_once __DIR__.'/../../model/Aluno.php';

print"<a href='listar.php'>Voltar</a>";
if($_POST!==[]){
    $nome =$_POST['nome'];
    $idade = $_POST['idade'];
    $estrang = $_POST['estrang'];
    $idCurso = $_POST['curso'];

    // Cria um Objeto Curso
    $curso = new Curso($idCurso,null,null);

    // Cria um Objeto Aluno
    $aluno = new Aluno(null,$nome,$idade,$estrang,$curso);


    AlunoController::insert($aluno);
    // Redireciona para o listar.php
    header('location:listar.php');
}







require_once "form.php";