<?php
require_once "Departamento.php";


class Funcionario{

  private string $nome;
  private string $cargo;
  private float $salario;
  private Departamento $depto;


  //__construct

  public function __construct(string $nm,string $cg,float $sl,$dpNom,$dpSal){
    
    $this->nome = $nm;
    $this->cargo = $cg;
    $this->salario = $sl;
    $this->depto = new Departamento($dpNom,$dpSal);


    /*foreach($GLOBALS['geralDepartamentos'] as $key=>$depato){
      if(strtolower($dp) == strtolower($depato->getNome()) or $dp == $key+1){
        $this->depto = $depato;
        break;
      }
    }*/

  }

  //__toString
  public function __toString(){
    return "[Nome]- ". $this->nome
    ."\n[Cargo]- ". $this->cargo
    ."\n[Salário]- R$". round($this->salario,2)
    ."\n[Departamento]- ". $this->depto->getNome()
    ."\n[NúmeroSala]- ". $this->depto->getNumeroSala();



  }








  /**
   * Get the value of nome
   */
  public function getNome(): string
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   */
  public function setNome(string $nome): self
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of salario
   */
  public function getSalario(): float
  {
    return $this->salario;
  }

  /**
   * Set the value of salario
   */
  public function setSalario(float $salario): self
  {
    $this->salario = $salario;

    return $this;
  }

  /**
   * Get the value of cargo
   */
  public function getCargo(): string
  {
    return $this->cargo;
  }

  /**
   * Set the value of cargo
   */
  public function setCargo(string $cargo): self
  {
    $this->cargo = $cargo;

    return $this;
  }

  /**
   * Get the value of depto
   */
  public function getDepto(): Departamento
  {
    return $this->depto;
  }

  /**
   * Set the value of depto
   */
  public function setDepto(Departamento $depto): self
  {
    $this->depto = $depto;

    return $this;
  }
}



