<?php





MontarTabela("So","it","Actually","works????","guess so");






function MontarTabela(...$itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 3; 
    $sizeInte = $sizeTab+4;//O Número PRECISA ser maior que 3
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - strlen($itens[$i]))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0]))."]\n";
    print str_repeat("=",$sizeInte)."\n";
}































