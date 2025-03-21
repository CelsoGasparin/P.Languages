<?php

$carro1 = ['modelo'=>'Polo','marca'=>'Volkswagen','foto'=>'https://avatars.githubusercontent.com/u/134729228?v=4'];
$carro2 = ['modelo'=>'Polo2','marca'=>'MarcaLegal1','foto'=>'https://minesweeper.online/img/minesweeper-online.svg'];
$carro3 = ['modelo'=>'Polo3','marca'=>'MarcaLegal2','foto'=>'https://avatars.githubusercontent.com/u/112884596?v=4&size=40'];
$carro4 = ['modelo'=>'Polo4','marca'=>'MarcaLegal3','foto'=>'https://avatars.githubusercontent.com/u/178297936?s=130&v=4'];
$carro5 = ['modelo'=>'Polo5','marca'=>'MarcaLegal4','foto'=>'https://avatars.githubusercontent.com/u/134729467?s=130&v=4'];

$carros = [$carro1,$carro2,$carro3,$carro4,$carro5];
foreach($carros as $carro){
?>
<div style="border: solid 5px;width:300px;margin-top:20px;">
    <?=$carro['modelo']?><br>
    <?=$carro['marca']?><br>
    <img style="width:100%;height:auto;" src="<?=$carro['foto']?>" alt="">
</div>

<?php
}
?>