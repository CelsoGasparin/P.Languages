<?php

require_once "IngressoVIP.php";


class IngressoCamarote extends IngressoVIP{
    private $valorAdcionalCamarote;

    public function getValorTotal(){
        return parent::getValorTotal()+$this->valorAdcionalCamarote;
    }
    
    /**
     * Get the value of valorAdcionalCamarote
     */
    public function getValorAdcionalCamarote()
    {
        return $this->valorAdcionalCamarote;
    }

    /**
     * Set the value of valorAdcionalCamarote
     */
    public function setValorAdcionalCamarote($valorAdcionalCamarote): self
    {
        $this->valorAdcionalCamarote = $valorAdcionalCamarote;

        return $this;
    }
}

