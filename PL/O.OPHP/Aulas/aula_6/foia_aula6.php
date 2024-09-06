<?php



class Produto{



    //Atributos
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;



    
    //__construct
    public function __construct(){
        $this->setDescricao(readline("Que produto você está comprando?-"));
        $this->setQuantidade(readline("Qual a quantidade desse produto que você está comprando?-"));
        $this->setValorUnitario(readline("Qual o preço de uma unidade desse produto?-"));
        $this->setUnidadeMedida(readline("Quanto que você comprou desse produto(Kilos,metros,etc)?-"));
    }

    //__toString
    public function __toString(){
        return "\nProduto: ". $this->descricao ." ". $this->unidadeMedida ." | ". $this->quantidade . " X R$". $this->valorUnitario." = ".
        $this->getValorTotal();       
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
     * Get the value of unidadeMedida
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set the value of unidadeMedida
     */
    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

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

        return $this->getValorUnitario()*$this->getQuantidade();
    }
}

$produto1 = new Produto();
print"--------------\n";
$produto2 = new Produto();
print"--------------\n";
$produto3 = new Produto();
print $produto1;
print $produto2;
print $produto3;
compararProduto($produto1,$produto2,$produto3);



function compararProduto(...$class){
    $val = $class[0]->getValorTotal();
    foreach($class as $ob){
        if($ob->getValorTotal() >= $val){
            $val = $ob->getValorTotal();
            $maior = $ob;
        }
    }
    print "\nA Venda com o maior valor total do produto:". $maior->getDescricao() ." ". $maior->getUnidadeMedida();
}