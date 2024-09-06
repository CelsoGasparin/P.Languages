<?php





montarMenu("So","it","Actually","works????","guess so");




function montarMenu(...$itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 3; 
    $sizeInte = $sizeTab+4;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - strlen($itens[$i]))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0]))."]\n";
    print str_repeat("=",$sizeInte)."\n";
}


function arrayMontarMenu(array $itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 3; 
    $sizeInte = $sizeTab+4;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - strlen($itens[$i]))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0]))."]\n";
    print str_repeat("=",$sizeInte)."\n";
}






























