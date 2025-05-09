<?php



class Card{

    private $title;
    private $desc;
    private array $imgs;
    private $color;
    private $colorT;
    private $date;
    private $colorD;
    private $posText;
    private bool $seeM;
    private bool $border;
    private $borderColor;
    private $borderSize;




    public function __construct($tit,$des,array $imgs,$col,$dat,$colD,$pt,bool $sem,bool $bor,$borCor,$borSize){
        
        
        $this->title = $tit;
        $this->desc = $des;
        $this->imgs = $imgs;
        $this->color = $col;
        $this->date = $dat;
        $this->colorD = $colD;
        $this->posText = $pt;
        $this->seeM = $sem;
        $this->border = $bor;
        if($bor==true){
            $this->borderColor=$borCor;
            $this->borderSize=$borSize;
        }

    }


}