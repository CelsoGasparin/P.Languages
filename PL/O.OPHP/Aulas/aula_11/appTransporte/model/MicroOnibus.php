<?php

require_once "Veiculo.php";



class Micro_Onibus extends Veiculo{
    

    public function getKMrodado(){
        return 2.75*$this->KMviagem;
    }



    

    
}