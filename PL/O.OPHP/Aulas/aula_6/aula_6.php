<?php

class Pessoa{

    private $nome;
    private $endereco;
    private $cidade;
    private $uf;
    private $altura;

    public function getApresentacao(){
        return "Olá mundo, sou ".$this->nome.", resido no endereço ".$this->endereco .",".$this->cidade."-".$this->uf." e possuo uma altura de ".$this->altura;
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of uf
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set the value of uf
     */
    public function setUf($uf): self
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}
$A1 = new Pessoa();
$A1->setNome("nomelegal1");
$A1->setEndereco("25");
$A1->setCidade("cidade1");
$A1->setUf("AA");
$A1->setAltura("2m");
print $A1->getApresentacao()."\n";


$A2 = new Pessoa();
$A2->setNome("nomelegal2");
$A2->setEndereco("52");
$A2->setCidade("cidade2");
$A2->setUf("BB");
$A2->setAltura("1m");
print $A2->getApresentacao()."\n";



