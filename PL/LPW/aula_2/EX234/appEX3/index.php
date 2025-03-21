<?php
    require_once "model/Presidente.php";


    $presidas = [
        new Presidente(16,'Eurico Gaspar Dutra',1946,1951),
        new Presidente(17,'Getúlio Nargas',1951,1954),
        new Presidente(18,'Café Filho',1954,1955),
        new Presidente(19,'Carlo Luz',1955,1955),
        new Presidente(20,'Nereu Ramos',1955,1956),
        new Presidente(21,'Juscelino Kubitschek',1956,1961)//Juscelino ARROMBADO 
    ];


    



?>


<table style="border-collapse:collapse;border:2px solid black;">
    <tr>
        <th style="border-collapse:collapse;border:2px solid black;">Número</th>
        <th style="border-collapse:collapse;border:2px solid black;">Nome</th>
        <th style="border-collapse:collapse;border:2px solid black;">Início</th>
        <th style="border-collapse:collapse;border:2px solid black;">Fim</th>
        
    </tr>
   

    <?php 
        foreach($presidas as $key=>$presidente){
    ?>

    <tr>

            <td style="border-collapse:collapse;border:2px solid black;"><?=$presidente->getNumero()?></td>
            <td style="border-collapse:collapse;border:2px solid black;"><?=$presidente->getNome()?></td>
            <td style="border-collapse:collapse;border:2px solid black;"><?=$presidente->getInicio()?></td>
            <td style="border-collapse:collapse;border:2px solid black;"><?=$presidente->getFim()?></td>
            
    </tr>
    <?php 
    }
    ?>

</table>