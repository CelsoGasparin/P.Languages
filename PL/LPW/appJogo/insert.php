<?php


// postPHP('localhost/LPW/appJogo/index.php',['OI'=>'testes legais']);
// postPHP('localhost:8080/index.php',$_POST);


print(postPHP('http://localhost:8080/index.php',$_POST));
function postPHP($url,array $info){

    $curl = curl_init();
    
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($info));
    curl_setopt($curl,CURLOPT_ENCODING,'');
    // print http_build_query($info);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $teste = curl_exec($curl);
    $ball = curl_error($curl);
    curl_close($curl);
    return $teste;
}