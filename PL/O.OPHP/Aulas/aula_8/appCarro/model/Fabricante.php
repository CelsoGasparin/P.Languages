<?php





//$geralFabricantes = [];
class Fabricante{

    private $nome;
    private $sigla;


    //__construct
    public function __construct($nm,$sg){
        
        $this->nome = $nm;
        $this->sigla = $sg;

        //$GLOBALS['geralFabricantes'][] = $this;


    }


    //__toString
    public function __toString(){
        
        return  $this->nome."~".$this->sigla;



    }









    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sigla
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla($sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}


