<?php

class Livro{

    private $titulo;
    private $autor;
    private $genero;
    private $pags;







    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of pags
     */
    public function getPags()
    {
        return $this->pags;
    }

    /**
     * Set the value of pags
     */
    public function setPags($pags): self
    {
        $this->pags = $pags;

        return $this;
    }
}

$liv1 = new Livro();
$liv1->setTitulo(readline("Qual é o título do primeiro livro?"));
$liv1->setAutor(readline("Quem é o Autor do primeiro livro?"));
$liv1->setGenero(readline("Qual o gênero do primeiro livro?"));
$liv1->setPags(readline("Quantas páginas o primeiro livro tem?"));

$liv2 = new Livro();
$liv2->setTitulo(readline("Qual é o título do segundo livro?"));
$liv2->setAutor(readline("Quem é o Autor do segundo livro?"));
$liv2->setGenero(readline("Qual o gênero do segundo livro?"));
$liv2->setPags(readline("Quantas páginas o segundo livro tem?"));

$liv3 = new Livro();
$liv3->setTitulo(readline("Qual é o título do terceiro livro?"));
$liv3->setAutor(readline("Quem é o Autor do terceiro livro?"));
$liv3->setGenero(readline("Qual o gênero do terceiro livro?"));
$liv3->setPags(readline("Quantas páginas o terceiro livro tem?"));

comparaLivros($liv1,$liv2,$liv3);




function comparaLivros($livro1,$livro2,$livro3){

    if($livro1->getPags() >$livro2->getPags() and $livro1->getPags() >$livro3->getPags()){
        print "\n[Título]- ".$livro1->getTitulo()."\n";
        print"[Autor]- ".$livro1->getAutor()."\n";
        print"[Gênero]- ".$livro1->getGenero()."\n";
        print"[Páginas]- ".$livro1->getPags()."\n";
    }elseif($livro2->getPags() > $livro3->getPags()){
        print "\n[Título]- ".$livro2->getTitulo()."\n";
        print"[Autor]- ".$livro2->getAutor()."\n";
        print"[Gênero]- ".$livro2->getGenero()."\n";
        print"[Páginas]- ".$livro2->getPags()."\n";
    }else{
        print "\n[Título]- ".$livro3->getTitulo()."\n";
        print"[Autor]- ".$livro3->getAutor()."\n";
        print"[Gênero]- ".$livro3->getGenero()."\n";
        print"[Páginas]- ".$livro3->getPags()."\n";
    }
    
}