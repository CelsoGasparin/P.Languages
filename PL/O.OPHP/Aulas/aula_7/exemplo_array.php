<?php

class Robo{
    private string $nome;
    private string $tipo;
    private int $qtdSensores;

    //__construct
    public function __construct($n,$t,int $qtS){
        $this->nome = $n;
        $this->tipo = $t;
        $this->qtdSensores = $qtS;
    }



    //__toString
    public function __toString(){
        return $this->getNome()." - ".$this->getTipo();
    }


    /**
     * Get the value of nome
     */
    public function getNome(): string{
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string{
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self{
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of qtdSensores
     */
    public function getQtdSensores(): int{
        return $this->qtdSensores;
    }

    /**
     * Set the value of qtdSensores
     */
    public function setQtdSensores(int $qtdSensores): self{
        $this->qtdSensores = $qtdSensores;

        return $this;
    }
}



$robo1 = new Robo("nomelegal","Arduino",4);

$robo2 = new Robo("nomecool","Lego",2);

$robo3 = new Robo("nomezika","Arduino",3);


$robos = [$robo1,$robo2,$robo3, new Robo("Laercio","Arduino",3)];
//print $robos[1]->getNome()."\n";
//print $robos[1]->getTipo()."\n";
//print $robos[1];

/*
for($i=0; $i < count($robos); $i++){ 
    print $robos[$i]."\n";    
}
*/
foreach($robos as $robo){
    print $robo."\n";
}

$robo4 = $robos[3];
print $robo4->getTipo()."\n".$robos[3]->getTipo();