<?php


require_once "Ingresso.php";

class IngressoVIP extends Ingresso{
    protected $valorAdcional;


    public function getValorTotal(){
        return parent::getValorTotal()+$this->valorAdcional;
    }


    /**
     * Get the value of valorAdcional
     */
    public function getValorAdcional()
    {
        return $this->valorAdcional;
    }

    /**
     * Set the value of valorAdcional
     */
    public function setValorAdcional($valorAdcional): self
    {
        $this->valorAdcional = $valorAdcional;

        return $this;
    }
}