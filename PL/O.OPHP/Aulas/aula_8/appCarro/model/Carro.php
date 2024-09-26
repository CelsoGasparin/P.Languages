<?php
require_once "Fabricante.php";


class Carro{

    private $modelo;
    private $anoFabricacao;
    private Fabricante $fabricante;

    //__construct
    public function __construct($md,$anF){
        
        $this->modelo = $md;
        $this->anoFabricacao = $anF;
        /*
        foreach($GLOBALS['geralFabricantes'] as $key => $fabricante){
            if(strtolower($fab) == strtolower($fabricante->getNome()) or strtolower($fab) == strtolower($fabricante->getSigla()) or $fab == $key+1 ){
                $this->fabricante = $fabricante;
                break;
            }
        }
        */
    }

    //__toString
    public function __toString(){
        
        return "[Modelo]- ". $this->modelo
        ."\n[AnoFabricação]- ". $this->anoFabricacao
        ."\n[Fabricante]- ". $this->fabricante;
    }




    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of anoFabricacao
     */
    public function getAnoFabricacao()
    {
        return $this->anoFabricacao;
    }

    /**
     * Set the value of anoFabricacao
     */
    public function setAnoFabricacao($anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}