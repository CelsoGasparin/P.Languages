<?php
$min = 20;
$max = 70;
$par = 0;
$impar = 0;
for($i=$min; $i <= $max ; $i++){ 
    $i%2 ? $par += $i: $impar += $i;
}
    print "Soma dos  Pares:".$par;
?>
<br>
<p>Soma dos Impares: <?=$impar?></p>