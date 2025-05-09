<?php   

require_once "model/Filme.php";

$filme = new Filme($_POST['name'],$_POST['diretor'],$_POST['year'],$_POST['image']);





print $filme;

?>

<br><br>
<a href="index.php">Voltar</a>



