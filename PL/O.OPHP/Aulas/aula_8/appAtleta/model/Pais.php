<?php


$paises = [];
class Pais{

    private $nome;
    private $continente;
    private array $atletas;
    
    //__construct
    public function __construct($nm,$co){
        
        $this->nome = $nm;
        $this->continente = $co;
        $this->atletas = [];

    }




    //getInfo
    public function getInfo(){

        return [$this->nome,$this->continente,$this->atletas];

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
     * Get the value of continente
     */
    public function getContinente()
    {
        return $this->continente;
    }

    /**
     * Set the value of continente
     */
    public function setContinente($continente): self
    {
        $this->continente = $continente;

        return $this;
    }

    /**
     * Get the value of atletas
     */
    public function getAtletas(): array
    {
        return $this->atletas;
    }

    /**
     * Set the value of atletas
     */
    public function setAtletas(array $atletas): self
    {
        $this->atletas = $atletas;

        return $this;
    }
    public function addAtleta($k){

        $this->atletas[] = $k;


    }
}