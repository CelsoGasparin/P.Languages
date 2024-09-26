<?php


require_once "Pais.php";




class Atleta {
    
    private $nome;
    private $idade;
    private $esporte;
    private Pais $pais;


    //__construct
    public function __construct($nm,$id,$ep,$ps,array $paises){
        
        $this->nome = $nm;
        $this->idade = $id;
        $this->esporte = $ep;
        foreach($paises as $key=> $pais){
            
            if(strtolower($ps) == strtolower($pais->getNome()) or $ps == $key+1){
                $this->pais = $pais;
                //$pais->addAtleta($this);
            }

        }



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
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of esporte
     */
    public function getEsporte()
    {
        return $this->esporte;
    }

    /**
     * Set the value of esporte
     */
    public function setEsporte($esporte): self
    {
        $this->esporte = $esporte;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais(): Pais
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais(Pais $pais): self
    {
        $this->pais = $pais;

        return $this;
    }
}
