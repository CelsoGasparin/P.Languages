<?php


class Pokemon{
    private $img;
    private $name;
    private $type;
    private $pokepedia;



    public function __construct($img,$nam,$typ,$poke){
        $this->img = $img;
        $this->name = $nam;
        $this->type = $typ;
        $this->pokepedia = $poke;
    }
    
    public function __toString(){
        return '<table style="border-collapse:collapse;border:1px solid black;">

        <tr>
            <th style="border-collapse:collapse;border:1px solid black;"> <img width="200" height="200" src="'.$this->img.'" alt=""> </th>
        </tr>
        <tr>
        <td style="border-collapse:collapse;border:1px solid black;">'.$this->name.'</th>
        </tr>
        <tr>
        <td style="border-collapse:collapse;border:1px solid black;">'.$this->type.'</th>
        </tr>
        <tr>
        <td style="border-collapse:collapse;border:1px solid black;">'.$this->pokepedia.'</th>
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

    /**
     * Get the value of pokepedia
     */
    public function getPokepedia()
    {
        return $this->pokepedia;
    }

    /**
     * Set the value of pokepedia
     */
    public function setPokepedia($pokepedia): self
    {
        $this->pokepedia = $pokepedia;

        return $this;
    }
}