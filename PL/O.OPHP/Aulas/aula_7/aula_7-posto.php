<?php


class Posto{
    
    private $litrosGasolina;
    private $abastecimentoGasolina;
    
     
    //__construct
    public function __construct(){
        
        $this->litrosGasolina = 0;
        $this->abastecimentoGasolina = [];
        
    }



    public function abastecer($gasValue){


        $this->litrosGasolina -= $gasValue;
        $this-> abastecimentoGasolina[] = $gasValue;


    }











    
    
    /**
     * Get the value of litrosGasolina
     */
    public function getLitrosGasolina()
    {
        return $this->litrosGasolina;
    }
    
    /**
     * Set the value of litrosGasolina
     */
    public function setLitrosGasolina($litrosGasolina): self
    {   



        $this->litrosGasolina = $litrosGasolina;
    
        return $this;
    }
    
    /**
     * Get the value of abastecimentoGasolina
     */
    public function getAbastecimentoGasolina($key)
    {
        return $this->abastecimentoGasolina[$key];
    }

    public function getAbastecimentoGasolinaFULL()
    {
        return $this->abastecimentoGasolina;
    }
    /**
     * Set the value of abastecimentoGasolina
     */
    public function setAbastecimentoGasolina($abastecimentoGasolina): self
    {
        $this->abastecimentoGasolina[] = $abastecimentoGasolina;
    
        return $this;
    }

}



$posto = new Posto();

while(true){
    system("clear");    
    montarMenu("Abastecer","Repor estoque","Listar Abastecimentos");
    $opValue = readline();

    if($opValue == 1){
        do{
            system("clear");
            print "O Posto tem ". $posto->getLitrosGasolina()."L de gasolina.\n";
            $gasValue = readline("Quantos Litros de gasolina você quer abastecer?");
        }while(is_numeric($gasValue) == false);
        if($gasValue > 0 ){
            if($gasValue > $posto->getLitrosGasolina()){
                $gasValue += $posto->getLitrosGasolina() - $gasValue;
            }
            //$posto->setLitrosGasolina($posto->getLitrosGasolina() - $gasValue);
            //$posto->setAbastecimentoGasolina($gasValue);
            $posto->abastecer($gasValue);
        }
    }elseif($opValue == 2){
        do{
            system("clear");
            print "O Posto tem ". $posto->getLitrosGasolina()."L de gasolina.\n";
            $gasValue = readline("Quantos Litros de gasolina você quer repor?");
        }while(is_numeric($gasValue) == false);
        if($gasValue > 0){
            $posto->setLitrosGasolina($posto->getLitrosGasolina()+$gasValue);
        }
    }elseif($opValue == 3){
        do{
            system("clear");
            montarMenu();
            $rep = count($posto->getAbastecimentoGasolinaFULL());
            for($i=0; $i < $rep; $i++){ 
                print "[Abastecimento ".$i+1 ."]- ". $posto->getAbastecimentoGasolina($i)."L\n";
            }
            $opValue = readline();
                        
        }while($opValue != 0);

    }elseif($opValue == 0){
        break;
    }

}
















function montarMenu(...$itens){//no momento protuguês não funciona direito com isso
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



