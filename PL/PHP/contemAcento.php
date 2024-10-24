<?php






function contemAcento($string){
    $qtdAc = 0;
    $iLen = strlen($string);
    $stringArray = [];
    $acentos = ['á','à','ã','â','Á','À','Ã','Â',
                'é','è','ẽ','ê','É','È','Ẽ','Ê',
                'í','ì','ĩ','î','Í','Ì','Ĩ','Î',
                'ó','ò','õ','ô','Ó','Ò','Õ','Ô',
                'ú','ù','ũ','û','Ú','Ù','Ũ','Û'];
    for($i=0; $i < $iLen; $i++){ 
        $stringArray[] = substr($string,$i,2);
    }
    // print_r($stringArray);
    foreach($stringArray as $stringI){
        foreach($acentos as $acento){
            if($stringI == $acento){
                $qtdAc++;
            }
        }
    }

    return $qtdAc;
}