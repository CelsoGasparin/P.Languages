<?php








$texto = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

if(){
    }    str_contains("oi como vai a vida", $texto);


function contemAcento($string){
    $qtdAc = 0;
    $iLen = strlen($string);
    $acentos = [
        'á','à','ã','â','Á','À','Ã','Â',
        'é','è','ẽ','ê','É','È','Ẽ','Ê',
        'í','ì','ĩ','î','Í','Ì','Ĩ','Î',
        'ó','ò','õ','ô','Ó','Ò','Õ','Ô',
        'ú','ù','ũ','û','Ú','Ù','Ũ','Û'
    ];
    // print_r($acentos);
    for($i=0; $i < $iLen; $i++){ 
        $stringArray[] = substr($string,$i,2);
    }
    // print_r($stringArray);
    foreach($stringArray as $key => $stringV){
        foreach($acentos as $acento){
            if($stringV == $acento){
                $qtdAc++;
            }
        }
    }
    return $qtdAc;
}

// print removerAcento("Olá Mundo,macarrão");
function removerAcento(string $string){
    $iLen = strlen($string);
    $actualString = '';
    $acentos = [
        ['á','à','ã','â'],['Á','À','Ã','Â'],
        ['é','è','ẽ','ê'],['É','È','Ẽ','Ê'],
        ['í','ì','ĩ','î'],['Í','Ì','Ĩ','Î'],
        ['ó','ò','õ','ô'],['Ó','Ò','Õ','Ô'],
        ['ú','ù','ũ','û'],['Ú','Ù','Ũ','Û']
    ];
    $actualStringArray = [];
    for($i=0; $i < $iLen; $i++){ 
        $stringCharac = substr($string,$i,2);
        $stringArray[$i] = substr($string,$i,1);
        $actualStringArray[$i] = $stringArray[$i]; 
        foreach($acentos as $key => $acentoGrupo) {
            foreach($acentoGrupo as $acento){
                if($stringCharac == $acento){
                    $letraModificada = null;
                    switch($key){
                        case 0:
                            $letraModificada = 'a';
                        break;
                            
                        case 1:
                            $letraModificada = 'A';
                        break;
                                
                        case 2:
                            $letraModificada = 'e';
                        break;
                                    
                        case 3:
                            $letraModificada = 'E';
                        break;
                                        
                        case 4:
                            $letraModificada = 'i';
                        break;
                                            
                        case 5:
                            $letraModificada = 'I';
                        break;
                                                
                        case 6:
                            $letraModificada = 'o';
                        break;
                                                    
                        case 7:
                            $letraModificada = 'O';
                        break;
                                                        
                        case 8:
                            $letraModificada = 'u';
                        break;
                                                            
                        case 9:
                            $letraModificada = 'U';
                        break;
                                                                
                        default:
                        break;
                    }
                    $actualStringArray[$i] = $letraModificada;
                }
                                                        
            }
        }
        $actualString .= $actualStringArray[$i];
    }
    
    return $actualString;
}
