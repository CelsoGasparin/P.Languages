<?php

require_once "model/Pokemon.php";


$poknomes = ['gholdengo','gimmighoul','vaporeon','dragonite','sneasler'];

$pokemons = [];
foreach($poknomes as $nome){
    // $pok = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome");;
    // $pok = json_decode($pok,true);
    // // print_r($pok);
    // if(count($pok['types']) >= 2){
    //     $type = $pok['types'][0]['type']['name'].' e '.$pok['types'][1]['type']['name'];
    // }else{
    //     $type = $pok['types'][0]['type']['name'];
    // }
    
    $pokemons[] = new Pokemon($nome);

}




?>

<div style="display:flex;">

<?php

    foreach($pokemons as $key => $pokemon){
        print $pokemon;
    }

?>

</div>






