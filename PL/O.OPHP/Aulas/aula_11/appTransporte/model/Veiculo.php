<?php



abstract class Veiculo{
    protected $valorFixo;
    protected $KMviagem;



    abstract public function getKMrodado();

    /**
     * Get the value of valorFixo
     */
    public function getValorFixo()
    {
        return $this->valorFixo;
    }

    /**
     * Set the value of valorFixo
     */
    public function setValorFixo($valorFixo): self
    {
        $this->valorFixo = $valorFixo;

        return $this;
    }

    
   

    /**
     * Get the value of KMviagem
     */
    public function getKMviagem()
    {
        return $this->KMviagem;
    }

    /**
     * Set the value of KMviagem
     */
    public function setKMviagem($KMviagem): self
    {
        $this->KMviagem = $KMviagem;

        return $this;
    }
} 