<?php 
require_once "util/Connection.php";

error_reporting(E_ALL);
ini_set('display_errors', '1');


$conn = Connection::getConn();
// var_dump($conn);



$sql = "SELECT * FROM livros";
$stm2 = $conn->prepare($sql);
$stm2->execute();
$livros =  $stm2->fetchAll();
// print_r($results);
if(isset($_POST['title'])){
    // print"Deu Submit";

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $qtdPages = $_POST['pages'];
    $author = $_POST['author'];

    print $title.'-'.$genre.'-'.$qtdPages.'-'.$author;
    
    $sql = "INSERT INTO livros(titulo,genero,qtd_paginas,autor) values (?,?,?,?)";
    $stm1 = $conn->prepare($sql);
    $stm1->execute([$title,$genre,$qtdPages,$author]);
    
    header('location:index.php');
    // var_dump($stm1);
    
}


?>




<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    
    <h1>Listagem</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Autor</th>
            <th>DELETE</th>
        </tr>

    <?php
        foreach($livros as $key => $livro) {

            if($livro['genero'] == 'R'){
                $gen = 'Romance';
            }elseif($livro['genero'] == 'D'){
                $gen = 'Drama';
            }elseif($livro['genero'] == 'F'){
                $gen = 'Ficção';
            }elseif($livro['genero'] == 'O'){
                $gen = 'Outro';
            }else{
                $gen = 'ERRO:Gênero inválido';
            }
            print '<tr>
        <td>'.$livro['id'].'</td>
        <td>'.$livro['titulo'].'</td>
        <td>'.$gen.'</td>
        <td>'.$livro['qtd_paginas'].'</td>
        <td>'.$livro['autor'].'</td>
        <td><button style="background-color:red;"><a href="delete.php?id='.$livro['id'].'" onclick="return confirm(\'Confirma a Exclusão?\')" style="color:black;">DELETE</a></button></td>
    </tr>';
        }
        

    ?>
    
    </table>

    <h1>Formulário</h1>

    <form action="" method="post">
        <div style="margin-bottom: 10px;">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="pages">Páginas:</label>
            <input type="number" min="1" max="10080" name="pages" id="pages" required>
        </div>
        <div>
            <label for="genre">Gênero:</label>
            <select name="genre" id="genre" required>
                <option value="" >--Selecione--</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>
        <div>
            <label for="author">Autor:</label>
            <input type="text" name="author" id="author" required>
        </div>
        <button type="submit">Submit</button>
    </form>     
</body>
</html>