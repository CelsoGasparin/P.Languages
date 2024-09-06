<?php

class Escola{

    private string $nome;
    private string $endereco;
    private int $qtdAlunos;

    //__construct
    public function __construct(){
        $this->nome = readline("Qual o nome da escola?");
        $this->endereco = readline("Qual o endereço da escola?");
        $this->qtdAlunos = readline("Quantos alunos a escola tem?");
    }
    //__toString
    public function __toString(){
        return  "[Nome]- ".$this->nome.
                "\n[Endereço]- ".$this->endereco.
                "\n[QtdAlunos]- ".$this->qtdAlunos;
        
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
     * Get the value of endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of qtdAlunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtdAlunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}


for($i=0; $i < 4; $i++){ 
    $escolas[] = new Escola();
    print "----------\n";
}
foreach($escolas as $e){
    print $e."\n----------\n";
}

$MalunosEsc = compararQtdAlunos($escolas);
print "ESCOLA COM A MAIOR QUANTIDADE DE ALUNOS:\n".$MalunosEsc;


function compararQtdAlunos(array $allunos){
    $allP = $allunos[0];
    foreach($allunos as $all){
        if($all->getQtdAlunos() > $allP->getQtdAlunos()){
            $allP = $all;
        }
    }
    return $allP;
}