<?php




class Produto{

    protected string $descricao;
    protected $unidadeMedida;

    public function __construct($des,$und){
        $this->descricao = $des;
        $this->unidadeMedida = $und;
    }
   
    protected function getDadosPai($valoresAdd){
        
        return"[Descricao]- ".$this->descricao
             ."\n[Unidade de Medida]- ".$this->unidadeMedida.
             $valoresAdd;


    }
    public function getDados(){
        return $this->getDadosPai(null);
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
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
}