<?php


require_once "Turma.php";

class Aluno {
    
    private $nome;
    private $idade;
    private Turma $turma;


    //__construct
    public function __construct($nm,$id,$tur){


        $this->nome = $nm;
        $this->idade = $id;
        foreach($GLOBALS['turmas'] as $turma){
            if(str_contains($turma->getNome(),$tur)){
                $this->turma = $turma;
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
     * Get the value of turma
     */
    public function getTurma(): Turma
    {
        return $this->turma;
    }

    /**
     * Set the value of turma
     */
    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}
