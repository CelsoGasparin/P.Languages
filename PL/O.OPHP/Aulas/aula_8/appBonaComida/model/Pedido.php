<?php

require_once "Prato.php";


class Pedido{

    private $nomeCliente;
    private $nomeGarcom;
    private Prato $prato;
    

    //__construct
    public function __construct($nomcli,$nomgar){
        
        $this->nomeCliente = $nomcli;
        $this->nomeGarcom = $nomgar;


    }

    //__toString
    public function __toString(){
        
        return "O cliente ".$this->nomeCliente.", foi atendido pelo Garçom ". $this->nomeGarcom .", pediu um prato de "
        . $this->prato->getNome()." no valor de R$". $this->prato->getValor();





    }


    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     */
    public function setNomeCliente($nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of nomeGarcom
     */
    public function getNomeGarcom()
    {
        return $this->nomeGarcom;
    }

    /**
     * Set the value of nomeGarcom
     */
    public function setNomeGarcom($nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    /**
     * Get the value of prato
     */
    public function getPrato(): Prato
    {
        return $this->prato;
    }

    /**
     * Set the value of prato
     */
    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}

