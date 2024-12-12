<?php

require_once "Veiculo.php";



class Van extends Veiculo{
    

    public function getKMrodado(){
        return 2.10*$this->KMviagem;
    }



    

}