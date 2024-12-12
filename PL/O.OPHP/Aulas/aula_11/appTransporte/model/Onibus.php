<?php

require_once "Veiculo.php";



class Onibus extends Veiculo{
    

    public function getKMrodado(){
        return 4.20*$this->KMviagem;
    }



    


}