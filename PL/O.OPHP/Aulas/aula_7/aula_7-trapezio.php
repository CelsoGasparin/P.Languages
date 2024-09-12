<?php

class Trapezio{

    private $baseMaior;
    private $baseMenor;
    private $altura;

    //__construct
    public function __construct($bM,$bN,$a){
        
        $this->baseMaior = $bM;
        $this->baseMenor = $bN;
        $this->altura = $a;

    }
    //__toString
    public function __toString(){
        return "[BASE MAIOR]- ".$this->baseMaior.
        "m\n[BASE MENOR]- ".$this->baseMenor.
        "m\n[ALTURA]- ".$this->altura."m";
    }


    /**
     * Get the value of baseMaior
     */
    public function getBaseMaior()
    {
        return $this->baseMaior;
    }

    /**
     * Set the value of baseMaior
     */
    public function setBaseMaior($baseMaior): self
    {
        $this->baseMaior = $baseMaior;

        return $this;
    }

    /**
     * Get the value of baseMenor
     */
    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    /**
     * Set the value of baseMenor
     */
    public function setBaseMenor($baseMenor): self
    {
        $this->baseMenor = $baseMenor;

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
    
    public function getArea(){
        return (($this->baseMaior+$this->baseMenor)*$this->altura)/2;
    }
}
print"Todos os valores serão calculados em metros.\n";
for($i=0;$i < 4;$i++){
    $trapezios[] = new Trapezio(readline("Qual a base maior do Trapézio?"),
    readline("Qual a base menor do Trapézio?"),
    readline("Qual a altura do Trapézio?"));
    print "--------------\n";
}
$Mtrapezio = compararAreaTrapezio($trapezios);
system("clear");
print "O TRAPÉZIO COM A MAIOR ÁREA TEM AS SEGUINTES PROPORÇÕES:\n";
print $Mtrapezio."\n[ÁREA]- ". $Mtrapezio->getArea()."m^2\n";



function compararAreaTrapezio(array $trapezios){
    $Gtrapezio = $trapezios[0];
    foreach($trapezios as $trapezio){
        if($Gtrapezio->getArea() < $trapezio->getArea()){
            $Gtrapezio = $trapezio;
        }
        
        
    }
    return $Gtrapezio;
    



}



