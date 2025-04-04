<?php

$jogadores = [['1','Tafarel','yellow'],
            ['2','Jorginho','green'],
            ['13','Aldair','yellow'],
            ['15','Márcio Santos','green'],
            ['6','Branco','yellow'],
            ['5','Mauro Silva','green'],
            ['8','Dunga','yellow'],
            ['17','Mazinho','green'],
            ['9','Zinho','yellow'],
            ['11','Romário','green'],
            ['7','Bebeto','yellow']];

function gerarTabela($num,$nom,$cor){

    return'<tr>
                <td style="border-collapse:collapse;border:2px solid black;background-color:'. $cor .';">'. $num .'</td>
                <td style="border-collapse:collapse;border:2px solid black;background-color:'. $cor .';">'. $nom .'</td>
            </tr>';

}
?>

<table style="border-collapse:collapse;border:2px solid black;">
    <tr>
        <th style="border-collapse:collapse;border:2px solid black;">Número</th>
        <th style="border-collapse:collapse;border:2px solid black;">Nome</th>
    </tr>
    
    <?php

    foreach($jogadores as $key=>$jogador){
        
        print gerarTabela($jogador[0],$jogador[1],$jogador[2]);

    }


    ?>

</table>




