<?php

require_once "Veiculo.php";


class CarroPasseio extends Veiculo{

    private $qtdPassageiros;
    




    //__construct
    public function __construct($mod,$co,$vm,$qp){
        
        $this->modelo = $mod;
        $this->cor = $co;
        $this->velocidadeMax = $vm;
        $this->qtdPassageiros = $qp;

    }

    //metodos
    public function getDados(){

        return "[Modelo]- ". $this->modelo.
        "\n[Cor]- ". $this->cor.
        "\n[Velocidade Máxima]- ". $this->velocidadeMax.
        "Km/H\n[Quantidade de Passageiros]- ". $this->qtdPassageiros;

    }


    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}