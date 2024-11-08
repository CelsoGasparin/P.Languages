<?php
require_once 'Pessoa.php';


class Professor extends Pessoa{
    private $salario;





    //__toString
    public function __toString(){
        return "[Nome]- ".$this->getNome()
              ."\n[Idade]- ".$this->getIdade()
              ."\n[RG]- ".$this->getRg()
              ."\n[Salário]- ".$this->getSalario();
    }
    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario($salario): self
    {
        $this->salario = $salario;

        return $this;
    }
}