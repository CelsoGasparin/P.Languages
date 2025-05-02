<?php
require_once "model/Veiculo.php";


    if($_POST['combustivel'] == 'A'){
        $comb = "Álcool";
    }elseif($_POST['combustivel'] == "G"){
        $comb = "Gasolina";
    }elseif($_POST['combustivel'] == 'F'){
        $comb = "Flex";
    }elseif($_POST['combustivel'] == ''){
        $comb = "VALOR INVÁLIDO";
    }    
    



$veiculo = new Veiculo($_POST['modelo'],$_POST['marca'],$comb);


print $veiculo;

?>

<a href="index.php">Voltar</a>