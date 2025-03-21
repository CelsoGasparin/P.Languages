<?php
function matrizKeys(array $matriz){
    $keys = [];
    foreach($matriz as $key =>$array){
        is_array($array) ? $keys[] = $key: null;
    }
    return $keys;
}

$usa = ["pais"=>'Estados Unidos',"medOuro"=>46,"medPrata"=>37,"medCobre"=>38
,'img'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/22px-Flag_of_the_United_States.svg.png',
'abrev'=>'USA',
'href'=>'https://pt.wikipedia.org/wiki/Estados_Unidos_nos_Jogos_Ol%C3%ADmpicos'];
$gbr = ["pais"=>'Grã-Betanha',"medOuro"=>27,"medPrata"=>23,"medCobre"=>17,
'img'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/22px-Flag_of_the_United_Kingdom_%283-5%29.svg.png',
'abrev'=>'GBR',
'href'=>'https://pt.wikipedia.org/wiki/Gr%C3%A3-Bretanha_nos_Jogos_Ol%C3%ADmpicos'];
$chn = ["pais"=>'China',"medOuro"=>26,"medPrata"=>18,"medCobre"=>26,
'img'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png',
'abrev'=>'CHN',
'href'=>'https://pt.wikipedia.org/wiki/China_nos_Jogos_Ol%C3%ADmpicos'];
$rus = ["pais"=>'Russia',"medOuro"=>19,"medPrata"=>17,"medCobre"=>20,'img'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/22px-Flag_of_Russia.svg.png',
'abrev'=>'RUS',
'href'=>'https://pt.wikipedia.org/wiki/R%C3%BAssia_nos_Jogos_Ol%C3%ADmpicos'];
$ger = ["pais"=>'Alemanha',"medOuro"=>17,"medPrata"=>10,"medCobre"=>15,'img'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/22px-Flag_of_Germany.svg.png',
'abrev'=>'GER',
'href'=>'https://pt.wikipedia.org/wiki/Alemanha_nos_Jogos_Ol%C3%ADmpicos'];

$all = [$usa,$gbr,$chn,$rus,$ger];
foreach($all as $key=>$value){
    $all[$key]['total'] = $value['medOuro']+$value['medCobre']+$value['medPrata'];
}
?>

<table style="border-collapse:collapse;border:2px solid black;">
    <tr>
        <th style="border-collapse:collapse;border:2px solid black;">Ordem</th>
        <th style="border-collapse:collapse;border:2px solid black;">País</th>
        <th style="border-collapse:collapse;border:2px solid black; background-color:#F7F6A8;width:35px;height:30px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/15px-Gold_medal.svg.png" alt="" width="20" height="20">
        </th>
        <th style="border-collapse:collapse;border:2px solid black; background-color:#DCE5E5;width:35px;height:30px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/15px-Silver_medal.svg.png" alt="" width="20" height="20">
        </th>
        <th style="border-collapse:collapse;border:2px solid black; background-color:#FFDAB9;width:35px;height:30px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/15px-Bronze_medal.svg.png" alt="" width="20" height="20">
        </th>
        <th style="border-collapse:collapse;border:2px solid black; background-color:#DCE5E5;width:40px;height:30px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/30px-GoldSilverBronze_medals.svg.png" alt="" width="40" height="20">
        </th>
    </tr>
    <?php

        foreach($all as $key=>$pais){
    ?>
    <tr>

            <td style="border-collapse:collapse;border:2px solid black;"><?=$key+1?></td>
            <td style="border-collapse:collapse;border:2px solid black;"><img src="<?=$pais['img']?>" height="15" width="30" alt=""><b><?=$pais['abrev']?></b> <a href="<?=$pais['href']?>"><?=$pais['pais']?></a></td>
            <td style="border-collapse:collapse;border:2px solid black;background-color:#F7F6A8;"><?=$pais['medOuro']?></td>
            <td style="border-collapse:collapse;border:2px solid black;background-color:#DCE5E5;"><?=$pais['medPrata']?></td>
            <td style="border-collapse:collapse;border:2px solid black;background-color:#FFDAB9;"><?=$pais['medCobre']?></td>
            <td style="border-collapse:collapse;border:2px solid black;background-color:#DCE5E5;"><?=$pais['total']?></td>
    </tr>
    <?php 
        }
    ?>


</table>