<?php



class Midia{

    protected $descricao;
    protected $precoPago;


    public function __construct($des,$prec){
        $this->descricao = $des;
        $this->precoPago = $prec;
    }

    protected function  getTipoPai($midia){
        return $midia;
    }
    public function getTipo(){
        $midia = get_class($this);
        return $this->getTipoPai($midia);
    }
    public function getDados(){
        return "[Descricao]- ".$this->descricao.
        "\n[PrecoPago]- R$".$this->precoPago.
        "\n[TipoDeMídia]- ".number_format($this->getTipo(),2,',','.');
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
     * Get the value of precoPago
     */
    public function getPrecoPago()
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago($precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}