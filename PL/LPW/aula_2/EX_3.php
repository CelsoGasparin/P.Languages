






<?php

$cidades = ['Foz do Iguaçu'=>
            ['Habitantes'=>250000,'Area'=>'500km2',
            'Altitude'=>'145m','Estado'=>'Paraná-PR'],
            'Cascavel'=>
            ['Habitantes'=>300000,'Area'=>'420km2',
            'Altitude'=>'320m','Estado'=>'Paraná-PR'],
            'Chapecó'=>
            ['Habitantes'=>240000,'Area'=>'120km2',
            'Altitude'=>'620m','Estado'=>'Santa Catarina-SC'],
            'Blumenau'=>
            ['Habitantes'=>330000,'Area'=>'200km2',
            'Altitude'=>'85m','Estado'=>'Santa Catarina-SC'],
            'Curitiba'=>
            ['Habitantes'=>1500000,'Area'=>'300km2',
            'Altitude'=>'850m','Estado'=>'Paraná-PR']];


    function matrizKeys(array $matriz){
        $keys = [];
        foreach($matriz as $key =>$array){
            is_array($array) ? $keys[] = $key: null;
        }
        return $keys;
    }
// print_r(matrizKeys($cidades));

foreach(matrizKeys($cidades) as $cidade){
    $dom = new DOMDocument();
    
}
?>





