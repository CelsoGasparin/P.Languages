<?php

use FFI\ParserException;

require_once "Produto.php";

class Livro extends Produto{
    private string $autor;

    
    public function __construct($aut,$des,$und){
        $this->autor = $aut;
        parent::__construct($des,$und);
    }


    public function getDados(){
        $string = "\n[Autor]- ".$this->autor;
        return parent::getDadosPai($string);
    }



    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}