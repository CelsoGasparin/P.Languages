<?php



class Ingresso{
    protected $valor;




    public function getValorTotal(){
        return $this->getValor();//É A MESMA COISA
    }

    protected function getDados($string){
        return"[]";
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}