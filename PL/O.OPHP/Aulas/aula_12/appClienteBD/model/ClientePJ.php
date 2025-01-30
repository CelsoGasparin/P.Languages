<?php

require_once "Cliente.php";


class ClientePJ extends Cliente{
    private string $razaoSocial;
    private string $cnpj;

    
    //__construct
    public function __construct($BD,$id = null,$nSo = null,$ema = null,$rSo = null,$cp = null){
        if($BD){
            $this->id = $BD['id'];
            $this->nomeSocial = $BD['nome_social'];
            $this->email = $BD['email'];
            $this->razaoSocial = $BD['razao_social'];
            $this->cnpj = $BD['cnpj'];
            return null;
        }
        $this->id = $id;
        $this->nomeSocial = $nSo;
        $this->email = $ema;
        $this->razaoSocial = $rSo;
        $this->cnpj = $cp; 
    }
    //__toString
    public function __toString(){
        return "[ID]- ".$this->id."\n".
        "[Tipo]- Pessoa Física\n".
        "[RazãoSocial]- ".$this->razaoSocial."\n".
        "[CNPJ]- ".$this->cnpj."\n".
        "[NomeSocial]- ".$this->nomeSocial."\n".
        "[Email]- ".$this->email."\n";
    }




    public function getIdentificacao(){
        return $this->razaoSocial;
    }
    public function getNroDoc(){
        return $this->cnpj;
    }
    public function  getTipo(){
        return "J";
    }


    /**
     * Get the value of razaoSocial
     */
    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     */
    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}