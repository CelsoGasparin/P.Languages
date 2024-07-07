<?php

$short ="p";
$long = [

    "pokemon:"

];
$options = getopt($short,$long);
print_r($options['pokemon']);
$nomeinsano = $options['pokemon'];

$poka = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nomeinsano");
$nomelegal = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0");
$pokaButBetter = json_decode($poka,true);
print(is_array($nomelegal)."\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
print(strtoupper($pokaButBetter['name'])."\n");
print(strtoupper($pokaButBetter['moves'][19]['move']['name'])."\n");
print($pokaButBetter['height']."\n");
print($pokaButBetter['weight']."\n");
foreach($pokaButBetter['moves'] as $oi){
    print($oi['move']['name']."\n");
}
