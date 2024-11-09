<?php


class Poder{
    private $descricao;
    private $forca;

    //__construct
    public function __construct($desc,$for){
        $this->descricao = $desc;
        $this->forca = $for;
    }






    //methods
    public function getForcaTotal($forcaMago){
        return (float)$this->forca > 0 ? $forcaMago + ($forcaMago*($this->forca/100)) : $forcaMago;
    }
    public function getPoderDescricao(){
        return $this->descricao."- ".$this->forca."% de dano adcional";
    }


    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of forca
     */
    public function getForca()
    {
        return $this->forca;
    }

    /**
     * Set the value of forca
     */
    public function setForca($forca): self
    {
        $this->forca = $forca;

        return $this;
    }
}