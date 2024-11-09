<?php

require_once "Poder.php";


class Mago{

    protected $nome;
    protected Poder $poder;



    //__construct
    // public function __construct($nom,Poder $pod){
    //     $this->nome = $nom;
    //     $this->poder = $pod;
    // }






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
     * Get the value of poder
     */
    public function getPoder(): Poder
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(Poder $poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}