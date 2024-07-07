<?php
    //include 'lógica.php';

    $pokeapi = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0");
    $pokeapiButBetter = json_decode($pokeapi,true);; 
    $quantPoke = 1292;
    $aparePoke = 0;
    for ($i=0; $i < $quantPoke; $i++) { 
        $pokemon = $pokeapiButBetter['results'][$i];

        
        
        
        if(isset($_GET['campo_busca']) and str_contains($pokemon['name'],$_GET['campo_busca'])){
            $todas_as_api = file_get_contents($pokemon['url']);
            $smol[] = json_decode($todas_as_api,true);
            
            
        }
        
        
    }
    if(isset($_GET['campo_busca']) and isset($smol)){
        foreach($smol as $AAA) {
            //if(str_contains($AAA['name'],$_GET['campo_busca'])){
                $encontrados[] = $AAA['name'];
                $jonas[] =$AAA;
                $aparePoke++; 
                
            //}
        }

    }
    //var_dump($encontrados);
    //die();



        
?>



<html>
<head>
    <title>Pokedex</title>

    <style>
        #pesquisa {
            background: #c92626;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            
            text-align: center;
            
        }
        #pesquisa input[type="text"]{
            




        }
        #pesquisa input[type="submit"]{




        }
        .pokemon {
            background: #cabc63;
            width: 20%;
            border: solid 4px ;
            padding: 5px;
            margin: 10px;
            float: left;
        }
        .pokemon img {
            max-width: 50%;
        }

    </style>


</head>
<body>
    <div id="pesquisa">
        <form method="get">
            <input type="text" name="campo_busca" placeholder = "Escolhe um pokémon aí"> 
            <input type="submit" value = "buscar">
        
        </form>




    </div>        
    <div id="pokemons">


        <?php for($i=0; $i < $aparePoke; $i++): ?>
            
        
            <div class="pokemon">
                <img src=<?= $jonas[$i]['sprites']['other']['official-artwork']['front_default']    ?> alt="HA" width="400px">
                <h1><?= $jonas[$i]['name'];  ?></h1>
                <p>peso: <?=  $jonas[$i]['weight']/10 . "kg" ?></p>
                <p>altura: <?=  $jonas[$i]['height']/10 ."m" ?></p>
            </div>
        <?php endfor; ?>
    
                    
        <?php if($aparePoke <= 0): ?>
            <div>
            <h1>escolhe um pokemon:></h1>

            </div>

        <?php endif ?>
    </div>
</body>
</html>