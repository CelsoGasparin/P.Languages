<?php
require_once "model/Link.php";



// desenharBTN([new Link('oi','teste'),new Link('oi','teste'),new Link('oi','teste')],'BADABIN');
// desenharBTN([new Link('oi','teste'),new Link('oi','teste'),new Link('oi','teste')],'BADABIN');

$array1 = [new Link('https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1000.png','Goldhengo'),
           new Link('https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/999.png','Gimmighoul'),
           new Link('https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/134.png','Vaporeon')];
$array2 = [new Link('https://avatars.githubusercontent.com/u/112884596?v=4&size=40','ddomenicoifpr'),
           new Link('https://avatars.githubusercontent.com/u/134729228?s=48&v=4','CelsoGasparin'),
           new Link('https://avatars.githubusercontent.com/u/134729255?v=4','GustaviGussolli')];
$array3 = [new Link('https://store-images.s-microsoft.com/image/apps.7279.14473293538384797.bcb417dc-ffbe-444e-9589-e6a25f04ad52.156eed19-aa35-4e69-96a7-c11abd7f887d?h=210','Firefox'),
           new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Google_Chrome_icon_%28February_2022%29.svg/480px-Google_Chrome_icon_%28February_2022%29.svg.png','Google Chrome'),
           new Link('https://c.clc2l.com/t/b/r/brave-browser-gmlOyV.png','Brave Browser')];
$array4 = [new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/640px-PHP-logo.svg.png','PHP'),
           new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/800px-ISO_C%2B%2B_Logo.svg.png','C++'),
           new Link('https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/800px-Python-logo-notext.svg.png','Python')];


desenharBTN($array1,'Pokemons');
desenharBTN($array2,'Contas de Github');
desenharBTN($array3,'Navegadores');
desenharBTN($array4,'Linguagens de Programação');

function desenharBTN(array $links,$nomeBTN){

          
    print'<div style="margin-bottom: 160px;" class="dropdown">
            <button class="dropbtn">'. $nomeBTN .'</button>
            <div class="dropText">';
    foreach($links as $key=>$link){
        print $link;    
    }
    print'</div>
        </div>';
}
?>
<link rel="stylesheet" href="style.css">






















