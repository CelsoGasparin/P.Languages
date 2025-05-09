<?php



class Filme{
    private $name;
    private $diretor;
    private $year;
    private $img;


    public function __construct($na,$dir,$ye,$img){
        $this->name=$na;
        $this->diretor=$dir;
        $this->year=$ye;
        $this->img=$img;
    }

    public function __toString(){
        return "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
                    ". $this->name ."<br>
                    ". $this->diretor ."<br>
                    ". $this->year ."<br>
                    <img style='width: 100%; height: auto;' src='". $this->img ."' /><br>
                </div>";
    }



    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

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
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }
}