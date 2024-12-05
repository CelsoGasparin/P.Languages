<?php


require_once "Produto.php";

class Computador extends Produto{
    private string $processador;
    private $memoria;


    public function __construct($pro,$mem,$des,$und){
        $this->processador = $pro;
        $this->memoria = $mem;
        parent::__construct($des,$und);
    }




    public function getDados(){
        $string = "\n[Processador]- ".$this->processador.
                  "\n[Memória]- ".$this->memoria;
        return parent::getDadosPai($string);
    }


    /**
     * Get the value of processador
     */
    public function getProcessador(): string
    {
        return $this->processador;
    }

    /**
     * Set the value of processador
     */
    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    /**
     * Get the value of memoria
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set the value of memoria
     */
    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}