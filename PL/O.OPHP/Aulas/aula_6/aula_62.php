<?php
class Aluno{
    private $nome;
    private $nota1;
    private $nota2;
    private $media;

    public function __construct($nome,$nota1,$nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }

    /**
     * Get the value of media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set the value of media
     */
    public function setMedia(): self
    {
        $this->media = ($this->nota1+$this->nota2)/2;

        return $this;
    }
}


$Alun1 = new Aluno("oi",10,8);
$Alun1->setMedia();
print "A média do aluno ".$Alun1->getNome()." é ".$Alun1->getMedia().".\n";
$Alun2 = new Aluno("olá",8,10);
$Alun2->setMedia();
print "A média do aluno ".$Alun2->getNome()." é ".$Alun2->getMedia().".\n";
$Alun3 = new Aluno("saudações",5,3);
$Alun3->setMedia();
print "A média do aluno ".$Alun3->getNome()." é ".$Alun3->getMedia().".\n";


