<?php

class Pessoa{
    public $nome;
    public $endereco;
    public $cidade;
    public $uniF;
    public $altura;

    function falarOla(){
        print "Olá Mundo, sou ".$this->nome ."!\n";
    }
    function falarEndereco(){
        print "Moro em ".$this->endereco.",".$this->cidade."/".$this->uniF."!\n" ;
    }
    function falarAltura(){
        print "Tenho ".$this->altura." metros!";
    }
}
class Retangulo{
    public $base;
    public $altura;

    function __construct($b,$a){
        $this->base=$b;
        $this->altura=$a;
    }

    function area(){
        return $this->base*$this->altura;
    }
    function perimetro(){
        return ($this->base*2)+($this->altura*2);
    }
}



function atv_2e3(){
    $retangulo1 = new Retangulo(readline("Qual a base do retângulo 1?"),
                                readline("Qual a área do retângulo 1?"));
    $retangulo2 = new Retangulo(readline("Qual a base do retângulo 2?"),
                                readline("Qual a área do retângulo 2?"));
    $retangulo3 = new Retangulo(readline("Qual a base do retângulo 3?"),
                                readline("Qual a área do retângulo 3?"));
    print "\nA área do retângulo 1 é ".$retangulo1->area();
    print "\nO perimetro do retângulo 1 é ".$retangulo1->perimetro();
    print "\nA área do retângulo 2 é ".$retangulo2->area();
    print "\nO perimetro do retângulo 2 é ".$retangulo2->perimetro();
    print "\nA área do retângulo 3 é ".$retangulo3->area();
    print "\nO perimetro do retângulo 3 é ".$retangulo3->perimetro();
    
}






function atv_1(){
    $pessoa1 = new Pessoa();
    $pessoa1->nome = readline("Qual teu nome?");
    $pessoa1->endereco = readline("Qual teu endereço?");
    $pessoa1->cidade = readline("Qual tua cidade?");
    $pessoa1->uniF = readline("Qual teu e?");
    $pessoa1->altura = readline("Qual sua altura?");
    $pessoa1->falarOla();
    $pessoa1->falarEndereco();
    $pessoa1->falarAltura();
    
}




