<?php




function todasFuncs($num1,$num2){

    return"Soma: ".$num1+$num2."<br>Subtração: ".$num1-$num2.
          "<br>Divisão: ".$num1/$num2."<br>Multiplicação: ".$num1*$num2.
          "<br>Resto: ".$num1%$num2;


}
















?>
















<p><?= isset($_GET['num1']) && isset($_GET['num2']) ? todasFuncs($_GET['num1'],$_GET['num2']) : 'Informe os números na URL'; ?></p>
