<?php



class Veiculo{


    private $modelo;
    private $marca;
    private $combust;



    public function __construct($mod,$mar,$com){
        $this->modelo = $mod;
        $this->marca = $mar;
        $this->combust = $com;
    }
    

    public function __toString(){
        return "<h1>Dados informados para o veículo</h1>".
            "Modelo: " . $this->modelo . "<br>".
            "Marca: " . $this->marca . "<br>".
            "Combustível: " . $this->combust . "<br>";
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combust
     */
    public function getCombust()
    {
        return $this->combust;
    }

    /**
     * Set the value of combust
     */
    public function setCombust($combust): self
    {
        $this->combust = $combust;

        return $this;
    }
}