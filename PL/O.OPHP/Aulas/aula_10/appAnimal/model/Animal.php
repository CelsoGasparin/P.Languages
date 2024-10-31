<?php


class Animal{
    protected $nome;
    protected $raca;


        //__construct
        public function __construct($n,$r){
            $this->nome = $n;
            $this->raca = $r;
        }
    




    //metodos

    public function getDados(){

        return "[Nome]- ". $this->nome.
                "\n[Raça]- ".$this->raca;




    }





    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of raca
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}
