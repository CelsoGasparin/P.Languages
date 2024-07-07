<?php
error_reporting(E_ALL & ~E_WARNING & ~E_DEPRECATED);
$contador = -1;
$bits = 6;
$pópassar = 0;
$octal = 0;
$dec = 1000;//readline("Manda um número decimal aí:D");
print HexToDec("1FA");
die;
print "\nBINÁRIO : ";
for($i=pow(2,$bits); $i >= 2;$i /= 2) { 
    if($dec%$i >= $i/2){
        $bin[] = 1;
        $pópassar++;
    }else{
        $bin[] = 0;
    }
    $contador++;
    if($pópassar > 0){
        print $bin[$contador];
    }
    
}
print "\n";
$contador = $bits-1;
for($poc = 1; $poc <= pow(10,$bits/3); $poc *= 10){
    //print "\nPOC: $poc\n";
    if($bin[$contador] == 1) {
        $octal += 1*$poc;
    }$contador--;
    if($bin[$contador] == 1) {
        $octal += 2*$poc;
    }$contador--;
    if($bin[$contador] == 1) {
        $octal += 4*$poc;
    }$contador--;    
}
print "\nOCTAL : $octal\n";
$HEXA = 
    [
        10=>'A',
        11=>'B',
        12=>'C',
        13=>'D',
        14=>'E',
        15=>'F',
    ]
;$contador = $bits-1;
$hexadec = [0,0,0,0,0,0];
$ignore = ($bits/4)-1;
for($phex = 0; $phex < $bits/4; $phex++){
    if($bin[$contador] == 1) {
        $hexadec[$phex] += 1;
    }$contador--;
    if($bin[$contador] == 1) {
        $hexadec[$phex] += 2;
    }$contador--;
    if($bin[$contador] == 1) {
        $hexadec[$phex] += 4;
    }$contador--;
    if($bin[$contador] == 1) {
        $hexadec[$phex] += 8;
    }$contador--;
    if($hexadec[$ignore] >= 10){
        $hexadec[$ignore] = $HEXA[$hexadec[$ignore]];
    }
    echo $hexadec[$ignore];
    $ignore--;
}


function DecToBin($bits,$dec){
    $pópassar = 0;
    $restul = "";
    for($i=pow(2,$bits); $i >= 2;$i /= 2) { 
        if($dec%$i >= $i/2){
            $bin[] = 1;
            $pópassar++;
        }elseif($pópassar > 0){
            $bin[] = 0;
        }
    }
    foreach($bin as $Obin){
        $restul .= $Obin;
    }
   return $restul;
}
function DecToOc($bits,$dec){
    $passar = 0;
    $contador = 0;
    $ignore = "";
    for($i=0; $i < $bits;$i++) { 
        $OC[] = $dec % 8;
        $dec /= 8;
    }
    for($i = $bits ;$i > 0;$i--){
        if($passar > 0){
            $ignore .= $OC[$i-1];
        }elseif($OC[$i-1] > 0){
            $ignore .=$OC[$i-1];
            $passar++;
        }
        $contador++;
    }
    return $ignore;
}

function DecToHex($bits,$dec){
    $contador = 0;
    $passar = 0;
    $ignore = "";
    $HEXA = 
    [
        10=>'A',
        11=>'B',
        12=>'C',
        13=>'D',
        14=>'E',
        15=>'F',
    ];
    for($i=0; $i < $bits;$i++) { 
        $HEX[] = $dec % 16;
        $dec /= 16;
        if($HEX[$i] >= 10){
            $HEX[$i] = $HEXA[$HEX[$i]];
        }
    }
    for($i = $bits ;$i > 0;$i--){
        if($passar > 0){
            $ignore .= $HEX[$i-1];
        }elseif($HEX[$i-1] > 0){
            $ignore .=$HEX[$i-1];
            $passar++;
        }
        $contador++;
    }
    return $ignore;

   
}
function BinToDec($bin){
    $bits = strlen($bin);
    $dec = 0;
    for($i = 0;$i < $bits; $i++){
        if(substr($bin,$i,1) == 1){
            $dec += pow(2,$bits-($i+1));    
        }
    }
    return $dec;
}
function OcToDec($OC){
    $bits = strlen($OC);
    $dec = 0;
    for($i = 0;$i < $bits; $i++){
        $bit = substr($OC,$i,1);
        if($bit > 0){
            $dec += $bit*pow(8,$bits-($i+1));    
        }
    }
    return $dec;

}
function HexToDec($Hex){//AS LETRAS TEM QUE ESTAR EM MAIÚSCULO não mais:]
    $HEXA = 
    [
        "A"=>10,
        "B"=>11,
        "C"=>12,
        "D"=>13,
        "E"=>14,
        "F"=>15,
        "a"=>10,
        "b"=>11,
        "c"=>12,
        "d"=>13,
        "e"=>14,
        "f"=>15,
    ];
    $bits = strlen($Hex);
    $dec = 0;
    for ($i=0; $i < $bits; $i++) { 
        $bit = substr($Hex,$i,1);
        if($bit > 0 and $bit <= 9){
            $dec += $bit*pow(16,$bits-($i+1)) ;
        }elseif($bit > 9 and is_numeric($bit) == false){
            $dec += $HEXA[$bit]*pow(16,$bits-($i+1));
        }
    }
    return $dec;
} 