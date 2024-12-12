<?php

require_once "Veiculo.php";



class Carro extends Veiculo{
    

    public function getKMrodado(){
        return 1.50*$this->KMviagem;
    }



    

    
}