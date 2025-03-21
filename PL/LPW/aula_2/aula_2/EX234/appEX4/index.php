<?php

require_once "model/Pokemon.php";


$poknomes = ['gholdengo','ditto','vaporeon','dragonite','voltorb'];

$pokemons = [];
foreach($poknomes as $nome){
    $pok = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome");;
    $pok = json_decode($pok,true);
    // print_r($pok);
    if(count($pok['types']) >= 2){
        $type = $pok['types'][0]['type']['name'].' e '.$pok['types'][1]['type']['name'];
    }else{
        $type = $pok['types'][0]['type']['name'];
    }
    
    $pokemons[] = new Pokemon($pok['sprites']['other']['official-artwork']['front_default'],$pok['name'],$type,'teste');

}




?>

<div style="display:flex;">

<?php

    foreach($pokemons as $key => $pokemon){
        print $pokemon;
    }

?>

</div>






