<?php



class Card{

    private $title;
    private $desc;
    private $img;
    private $color;
    private $colorT;
    private $date;
    private $colorD;
    private $posText;
    private bool $seeM;
    private bool $border;
    private $borderColor;
    




    public function __construct($tit,$des,$img,$col,$colT,$colD,$pt,bool $sem,bool $bor,$borCor){
        
        
        $this->title = $tit;
        $this->desc = $des;
        $this->img = $img;
        $this->color = $col;
        $this->colorT = $colT;
        $this->date = date('d/m/Y');
        $this->colorD = $colD;
        $this->posText = $pt;
        $this->seeM = $sem;
        $this->border = $bor;
        if($bor==true){
            $this->borderColor=$borCor;
        }

    }

    public function __toString(){

        $this->border ? : ;
        $html = '<div class="card" style="border:  ;width: 32vh; border-radius: 25px;background-color:'.$this->color.';color:'.$this->colorT.';">
  <img class="card-img-top" style=" border-radius: 25px 25px 0px 0px;" src="https://avatars.githubusercontent.com/u/134729228?v=4&size=40/100px180/" alt="Card image cap">
  <div class="card-body " style="border-radius: 0px 0px 25px 25px;background-color: '.$this->color.';">
      <h5 class="card-title text-'.$this->posText.'">'.$this->title.'</h5>
      <p class="card-text text-'.$this->posText.'">'.$this->desc.'</p>
      <p class="card-text text-center" style="color: '.$this->colorD.';">'.$this->date.'</p>';
      $html += $this->seeM ? '<a href="#" class="btn btn-primary">Ver Mais</a>':null;
      $html+='</div>
        </div>';
    }



    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of colorT
     */
    public function getColorT()
    {
        return $this->colorT;
    }

    /**
     * Set the value of colorT
     */
    public function setColorT($colorT): self
    {
        $this->colorT = $colorT;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of colorD
     */
    public function getColorD()
    {
        return $this->colorD;
    }

    /**
     * Set the value of colorD
     */
    public function setColorD($colorD): self
    {
        $this->colorD = $colorD;

        return $this;
    }

    /**
     * Get the value of posText
     */
    public function getPosText()
    {
        return $this->posText;
    }

    /**
     * Set the value of posText
     */
    public function setPosText($posText): self
    {
        $this->posText = $posText;

        return $this;
    }

    /**
     * Get the value of seeM
     */
    public function isSeeM(): bool
    {
        return $this->seeM;
    }

    /**
     * Set the value of seeM
     */
    public function setSeeM(bool $seeM): self
    {
        $this->seeM = $seeM;

        return $this;
    }

    /**
     * Get the value of border
     */
    public function isBorder(): bool
    {
        return $this->border;
    }

    /**
     * Set the value of border
     */
    public function setBorder(bool $border): self
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Get the value of borderColor
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * Set the value of borderColor
     */
    public function setBorderColor($borderColor): self
    {
        $this->borderColor = $borderColor;

        return $this;
    }
}

?>
