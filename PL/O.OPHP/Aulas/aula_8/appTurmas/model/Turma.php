<?php



$turmas = [];

class Turma {

    private $nome;
    private $curso;
    private array $alunos;

    //__construct
    public function __construct($nm,$cu){
        
        $this->nome = $nm;
        $this->curso = $cu;
        $this->alunos = [];
        $GLOBALS['turmas'][] = $this;


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
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     */
    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of alunos
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }

    /**
     * Set the value of alunos
     */
    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
    public function addAluno($v){

        $this->alunos[] = $v;

    }
}