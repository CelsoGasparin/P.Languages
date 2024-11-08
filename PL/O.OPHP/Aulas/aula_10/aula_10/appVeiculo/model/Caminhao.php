<?php

require_once "Veiculo.php";


class Caminhao extends Veiculo{

    private $qtdCarga;
    private $altura;


    //__construct
    public function __construct($mod,$co,$vm,$qc,$al){
        
        $this->modelo = $mod;
        $this->cor = $co;
        $this->velocidadeMax = $vm;
        $this->qtdCarga = $qc;
        $this->altura = $al;

    }



    //metodos
    public function getDados(){

        return "[Modelo]- ". $this->modelo.
        "\n[Cor]- ". $this->cor.
        "\n[Velocidade Máxima]- ". $this->velocidadeMax.
        "Km/H\n[Quantidade de Carga]- ". $this->qtdCarga.
        "Kg\n[Altura]- ". $this->altura."M";

    }

    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

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
}