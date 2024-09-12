<?php


class Prato{

    private $descricao;
    private $qtd;
    private $valorUnitario;


    //__construct
    public function __construct($d,$q,$vU){
        
        $this->descricao = $d;
        $this->qtd = $q;
        $this->valorUnitario = $vU;

    }
    //__toString
    public function __toString(){
        
        return"[DESCRIÇÃO]-". $this->descricao.
              "\n[QUANTIDADE]-". $this->qtd.
              "\n[ValorUnit]-R$".$this->valorUnitario.
              "\n[ValorTotal]-R$". $this->getValorTotal();


    }





    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of qtd
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * Set the value of qtd
     */
    public function setQtd($qtd): self
    {
        $this->qtd = $qtd;

        return $this;
    }

    /**
     * Get the value of valorUnitario
     */
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    /**
     * Set the value of valorUnitario
     */
    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
    public function getValorTotal(){
        return $this->valorUnitario*$this->qtd;
    }
}
system("clear");
for($i=0; $i < 3; $i++){ 
    $pratos[$i] = new Prato(readline("Oque é seu prato?"),
    readline("Quanto que você trouxe do seu prato?"),
    readline("Qual o valor Unitário do seu prato?"));
    print"--------------------\n";
}
$opValue = 999;
while(true){
    system("clear");
    montarMenu("Mostrar Pratos","Valor total dos pratos");
    $opValue = readline();
    if($opValue == 1){
        do{
            system("clear");
            montarMenu();
            foreach($pratos as $prato){
                print $prato."\n---------------\n";
            }
            $opValue = readline();
        }while($opValue != 0);
    }elseif($opValue == 2){
        do{
            system("clear");
            montarMenu();
            print "[VALOR TOTAL DA JANTA]- R$". valorJanta($pratos)."\n";
            $opValue = readline();
        }while($opValue != 0);
    }elseif($opValue == 0){
        break;
    }
}





function valorJanta(array $pratos){
    $total = 0;
    foreach($pratos as $prato){
        $total +=$prato->getValorTotal();
    }
    return $total;
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
