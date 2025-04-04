<?php


class Pokemon{
    private $img;
    private $name;
    private $type;
    private $pokepedia;



    public function __construct($nome){
        
        $pok = file_get_contents("https://pokeapi.co/api/v2/pokemon/$nome");;
        $pok = json_decode($pok,true);
        // print_r($pok);
        if(count($pok['types']) >= 2){
            $type = $pok['types'][0]['type']['name'].' e '.$pok['types'][1]['type']['name'];
        }else{
            $type = $pok['types'][0]['type']['name'];
        }
            
        $this->img = $pok['sprites']['other']['official-artwork']['front_default'];
        $this->name = $pok['name'];
        $this->type = $type;
        $this->pokepedia = 'https://pokemondb.net/pokedex/'.$pok['name'];
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
        <td style="border-collapse:collapse;border:1px solid black;"><a href="'. $this->pokepedia .'" target="_blank">Mais Informações</a></th>
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


?>



