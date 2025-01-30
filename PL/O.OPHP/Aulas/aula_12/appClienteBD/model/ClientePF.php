<?php

require_once "Cliente.php";




class ClientePF extends Cliente{

    private string $nome;
    private string $cpf;


    //__construct
    public function __construct($BD,$id = null,$nSo = null,$ema = null,$nom = null,$cp = null){
        if($BD){
            $this->id = $BD['id'];
            $this->nomeSocial = $BD['nome_social'];
            $this->email = $BD['email'];
            $this->nome = $BD['nome'];
            $this->cpf = $BD['cpf'];
            return null;
        }
        $this->id = $id;
        $this->nomeSocial = $nSo;
        $this->email = $ema;
        $this->nome = $nom;
        $this->cpf = $cp; 
    }
    //__toString
    public function __toString(){
        return "[ID]- ".$this->id."\n".
        "[Tipo]- Pessoa Física\n".
        "[Nome]- ".$this->nome."\n".
        "[CPF]- ".$this->cpf."\n".
        "[NomeSocial]- ".$this->nomeSocial."\n".
        "[Email]- ".$this->email."\n";
    }




    public function getNroDoc(){
        return $this->cpf;
    }
    public function getIdentificacao(){
        return $this->nome;
    } 
    public function getTipo(){
        return "F";
    }



    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}