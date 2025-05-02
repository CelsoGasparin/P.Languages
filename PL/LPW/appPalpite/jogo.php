<?php

session_start();
require_once "model/Palpite.php";




if(!isset($_GET['palpite'])){
    $palpitesTotal = $_POST['papT'];
for($i=0; $i < $palpitesTotal; $i++){ 
    $valor = rand(1,1025);
    $pok = file_get_contents("https://pokeapi.co/api/v2/pokemon/$valor");;
    $pok = json_decode($pok,true);
    if(count($pok['types']) >= 2){
        $type = $pok['types'][0]['type']['name'].' e '.$pok['types'][1]['type']['name'];
    }else{
        $type = $pok['types'][0]['type']['name'];
    }
    $palpites[] = new Palpite($pok['sprites']['other']['official-artwork']['front_default'],$pok['name'],$type);
}
$_SESSION['chosen'] = rand(0,$palpitesTotal-1);
$pokC = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$palpites[$_SESSION['chosen']]->getName());
$_SESSION['chosenP'] = json_decode($pokC,true);


print $_SESSION['chosen'];
?>


<div style="display:flex">
<?php
foreach ($palpites as $key => $value) {
    print "<div style='margin-right:". (2475-(206*$palpitesTotal))/$palpitesTotal ."px'>";
    print $key+1 .".";
    print $value;
    print "</div>";
}



?>
</div>
<div style="margin-top: 24vh;margin-left: 15vh;text-align: center;">
    <h1 >Palpite:</h1>
    <form action="" method="get">
        <input style="border-radius: 10px;" id="palpite" name="palpite" type="text" placeholder="número ou nome" required>
        <input style="border-radius: 10px;" type="submit" value="Enviar">
    </form>
    <button style="border-radius: 10px;" id="Dica" onclick="alert('O tipo do Pokemon é :<?= $palpites[$_SESSION['chosen']]->getType(); ?>')">DICA: Ver Tipo</button>
    <h5>AVISO!você só tem UMA CHANCE.</h5>

</div>
<?php
}else{
    $palp = $_GET['palpite'];
    if(((int)$palp-1 == $_SESSION['chosen']) or (strtolower($palp) == strtolower($_SESSION['chosenP']['name']))){
        // print(strtolower($palpites[$chosen]->getName()));
        ?>

        <div style="display: grid;text-align: center;align-items:center;">
            <h1 style="color: #4CBB17;">PARABÉNS!Você Acertou!</h1>
            
            <?php 
            // print_r($_SESSION['chosenP']);
            print '<table style="border-collapse:collapse;border:0.5vh solid #4CBB17;">

        <tr>
            <th> <img style="width:40.7vh;height: 40.7vh;" src="'. $_SESSION['chosenP']['sprites']['other']['official-artwork']['front_default'] .'" alt=""> </th>
        </tr>
        <tr>
        <td style="text-align: center;"><a target="_blank" href="'. $_SESSION['chosenP']['sprites']['other']['official-artwork']['front_default'] .'"><h1>'.$_SESSION['chosenP']['name'].'</h1></a></th>
        </tr>
        </table>';


            ?>
            
            <a href="index.php"><h1>Voltar</h1></a>
        </div>




        <?php

    }else{
        ?>
        <div style="display: grid;text-align: center;align-items:center;">
            <h1 style="color: #ff0000;">PUTZ...Você errou!Talvez na proxima você dê mais sorte.</h1>
            <h6 style="color: #4CBB17;">Correto:</h6>


            
            <?php 
            // print_r($_SESSION['chosenP']);
            print '<table style="border-collapse:collapse;border:0.5vh solid #4CBB17;">

        <tr>
            <th> <img style="width:40.7vh;height: 40.7vh;" src="'. $_SESSION['chosenP']['sprites']['other']['official-artwork']['front_default'] .'" alt=""> </th>
        </tr>
        <tr>
        <td style="text-align: center;"><a target="_blank" href="'. $_SESSION['chosenP']['sprites']['other']['official-artwork']['front_default'] .'"><h1>'.$_SESSION['chosenP']['name'].'</h1></a></th>
        </tr>
        </table>';


            ?>
            <a href="index.php"><h1>Voltar</h1></a>
        </div>
        <?php
    }
    
}
?>



