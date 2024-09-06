<?php

class Pokemon {
    //Atributos: características
    public $nome;
    public $tipo;
    
    public $ataque;
    public $defesa;
    public $velocidade;

    public $nivel;
    public $pontosVida;
    public $pontosVidaTotal;
    public $experiencia;

    //Construtor
    function __construct() {
        $this->nivel = 1;
        $this->pontosVidaTotal = 10;
        $this->pontosVida = $this->pontosVidaTotal;
        $this->ataque = 5;
        $this->defesa = 5;
        $this->velocidade = 5;
        $this->experiencia = 0;

    }

    //Métodos: ações
    function batalhar(Pokemon $pk){
        $in1 = rand(1,20)+($this->velocidade/2);
        $in2 = rand(1,20)+($pk->velocidade/2);
        if($in1 >= $in2 and $pk->pontosVida > 0){
            $pk->pontosVida -= rand(1,$this->ataque);
        }    
        while($this->pontosVida > 0 and $pk->pontosVida > 0){
            if($pk->pontosVida > 0){
                $this->pontosVida -= rand(1,$pk->ataque);
                print $this->pontosVida;
            }
            if($this->pontosVida > 0){
                $pk->pontosVida -= rand(1,$this->ataque);
                print $pk->pontosVida;    
         
            }
            
        }
        if($this->pontosVida > 0){
            $this->aumentarExperiencia(10*$pk->nivel);    
        }else{
            $pk->aumentarExperiencia(10*$this->nivel);
        }
                
    }

    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->recuperarHP();
        $this->aumentarAtaque();
        $this->aumentarDefesa();
        $this->aumentarVelocidade();
        $this->experiencia -= 100;
    }
    function recuperarHP(){
        $this->pontosVida = $this->pontosVidaTotal;
    }

    function aumentarPontosVida() {
        $this->pontosVidaTotal = $this->nivel * 10;
    }
    function aumentarAtaque() {
        $this->ataque = $this->nivel * 5;
    }
    function aumentarDefesa() {
        $this->defesa = $this->nivel * 5;
    }
    function aumentarVelocidade() {
        $this->velocidade = $this->nivel * 5;
    }
    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        while($this->experiencia >= 100){
            $this->aumentarNivel();
        }
    }
    function dados(){
        print "\n[Nome]".$this->nome."\n[Tipo]".$this->tipo."\n[Nível]".$this->nivel."\n[HPtotal]".$this->pontosVidaTotal.
        "\n[Ataque]".$this->ataque."\n[Defesa]".$this->defesa."\n[Velocidade]".$this->velocidade;
    }
    function __toString(){
        return $this->dados();
    }


}//FINAL classe Pokemon


//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "Psyduck";
$psyduck->tipo = "Aquático";
$psyduck->dados();
print"\n---------";
$lucario = new Pokemon();
$lucario->nome = "Lucario";
$lucario->tipo = "Lutador";
$lucario->dados();
print"\n---------\n";


print "\n".$psyduck->nivel;
print "\n".$lucario->nivel;




