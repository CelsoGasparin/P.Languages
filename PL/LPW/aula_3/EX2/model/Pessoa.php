<?php



class Pessoa{

    private $nome;
    private $sobrenome;
    private $idade;



    public function __construct($nom,$sob,$id){
        
        $this->nome = $nom;
        $this->sobrenome = $sob;
        $this->idade = $id;

    }
    

    public function __toString(){
        return 'NOME COMPLETO: '.$this->nome.' '.$this->sobrenome.'<br>IDADE: '.$this->idade;
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
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}