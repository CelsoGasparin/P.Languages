<?php

class Jogo{
    private $name;
    private $img;
    private $plataformas;
    private $lancamento;
    private $gens;
    private $desenvolvedor;
    private $publisher;
    private $price;
    private $ageRating;
    private $fileSize;

    public function __construct($nam,$img,$plat,$lan,$gs,$dev,$pub,$pri,$ageR,$fS){
        $this->name = $nam;
        $this->img = $img;
        $this->plataformas = $plat;
        $this->lancamento = $lan;
        $this->gens = $gs;
        $this->desenvolvedor = $dev;
        $this->publisher = $pub;
        $this->price = $pri;
        $this->ageRating = $ageR;
        $this->fileSize = $fS;
        
    }

}