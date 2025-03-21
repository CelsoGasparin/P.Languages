<?php





for($i=0; $i < 3; $i++){ 
$base = 0;
$altura = 0;
while($base == $altura){
    $base = rand(5,100);
    $altura = rand(5,100);
}
$retangulo[$i]['base'] = $base;
$retangulo[$i]['altura'] = $altura; 

?>
<p><?=$i+1;?>.Retângulo Área: <?=$retangulo[$i]['base']*$retangulo[$i]['altura'];?>cm2</p>
<?php
}
?>