<?php







                        







function ceasar($text,int $key){
    $A = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $a = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $txtlen = strlen($text); 
    $txt = "";
    $key %= 26;
    for($i=0; $i < $txtlen; $i++){ 
        $c = substr($text,$i,1);
        //print $c;
        
        for($j=0; $j < 26; $j++) { 
            if(($c == $A[$j] or $c == $a[$j]) and ($j+$key <= 25 and $j+$key >= 0)){
                $txt .= $a[$j+$key];
                break;
                
            }elseif(($c == $A[$j] or $c == $a[$j]) and $j+$key > 25){
                $txt .= $a[0+($key-(26-$j))];
                break;
            }elseif(($c == $A[$j] or $c == $a[$j]) and $j+$key < 0){
                $txt .= $a[26+($key+$j)];
                break;                
            }elseif($j == 25){
                $txt .= $c;
            }
        }

    }
    return $txt;
}







