<?php
require_once 'Pessoa.php';


class Aluno extends Pessoa{
    private $matricula;

    


    //__toString
    public function __toString(){
        return "[Nome]- ".$this->getNome()
              ."\n[Idade]- ".$this->getIdade()
              ."\n[RG]- ".$this->getRg()
              ."\n[Mátricula]- ".$this->getMatricula();
    }



    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }
}