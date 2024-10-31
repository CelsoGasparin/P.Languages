<?php


require_once "Veiculo.php";



class Onibus extends Veiculo{

    private $qtdPassageiros;
    private $pesoMax;


    //__construct
    public function __construct($mod,$co,$vm,$qp,$pm){
        
        $this->modelo = $mod;
        $this->cor = $co;
        $this->velocidadeMax = $vm;
        $this->qtdPassageiros = $qp;
        $this->pesoMax = $pm;
    }





    //metodos
    public function getDados(){

        return "[Modelo]- ". $this->modelo.
        "\n[Cor]- ". $this->cor.
        "\n[Velocidade Máxima]- ". $this->velocidadeMax.
        "Km/H\n[Quantidade de Passageiros]- ". $this->qtdPassageiros.
        "\n[Peso Máximo]- ". $this->pesoMax."Kg";

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

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}