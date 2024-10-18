<?php

require_once "iRadio.php";
require_once "iRelogio.php";


class RadioRelogio implements iRadio , iRelogio{

    private $corTela;
    
    



    //metódos

    public function ligarRadio(){
        print "Ligou Rádio Relógio!\n";
    }
    public function desligarRadio(){
        print "Desligou Rádio Relógio!\n";
    }
    public function mostrarHora(){
        print "oia a hora ". date('H:i:s')."\n";
        
    }




    /**
     * Get the value of corTela
     */
    public function getCorTela()
    {
        return $this->corTela;
    }

    /**
     * Set the value of corTela
     */
    public function setCorTela($corTela): self
    {
        $this->corTela = $corTela;

        return $this;
    }
}