<?php


class Palpite{
    private $img;
    private $name;
    private $type;
    



    public function __construct($img,$nam,$typ){
        $this->img = $img;
        $this->name = $nam;
        $this->type = $typ;
        
    }
    
    public function __toString(){
        return '<table style="border-collapse:collapse;border:0.2vh solid black;">

        <tr>
            <th style="border-collapse:collapse;border:0.2vh solid black;"> <img style="width:20.7vh;height: 20.7vh;" src="'.$this->img.'" alt=""> </th>
        </tr>
        <tr>
        <td style="border-collapse:collapse;border:0.2vh solid black;">'.$this->name.'</th>
        </tr>
        </table>';
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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

   
}







?>



