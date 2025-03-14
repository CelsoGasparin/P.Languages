<?php
    function arit(array $num){
        $total = 0;
        foreach($num as $n){
            $total += $n;
        }
        $total /= count($num);
        return $total;
    }
?>
<p>Primeiro número: <?=arit([12,32,12])?></p>
<br>
<p>Segundo número: <?=arit([12,32,50])?></p>
<br>
<p>Terceiro número: <?=arit([9,345,100])?></p>