<?php



$now = $_GET===[] ? '_POST' : '_GET';


$nome = $$now['nome'];
$idade = $$now['idade'];

if($nome != "" && $idade != ""){




print "Bem vindo ". $nome ." - ".$idade ." anos!";
}else{
    print "NÃO ACESSE ESSA PÁGINA SEM PASSAR OS VALORES NOME E IDADE";
}
?>




<br>
<a href="form.php">Voltar</a>








