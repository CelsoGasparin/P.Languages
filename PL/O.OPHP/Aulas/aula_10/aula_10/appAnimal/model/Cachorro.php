<?php

require_once "Animal.php";


class Cachorro extends Animal{


    // //__construct
    // public function __construct($n,$r){//posso colocar isso na classe PAI? a resposta é sim
    //     $this->nome = $n;
    //     $this->raca = $r;
    // }



    public function Latir(){
        return "Au";
    }



}


