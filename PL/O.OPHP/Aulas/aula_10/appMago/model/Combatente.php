<?php

require_once "Mago.php";



class Combatente extends Mago{

    private $forcaDeAtaque;



    //methods
    public function lancarPoder(){

        return "O Mago ".$this->nome.", do tipo ". get_class($this).", possui força de ".$this->forcaDeAtaque.
        " e lançou o poder ".$this->poder->getDescricao()." com força total de ".$this->poder->getForcaTotal($this->forcaDeAtaque);
    }

    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque()
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque($forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}

