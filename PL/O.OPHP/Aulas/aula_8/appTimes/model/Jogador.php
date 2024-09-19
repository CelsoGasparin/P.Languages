<?php

require_once "Time.php";




class Jogador{

  private $nome;
  private $numero;
  private Time $time;




 
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
   * Get the value of numero
   */
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of numero
   */
  public function setNumero($numero): self
  {
    $this->numero = $numero;

    return $this;
  }


  /**
   * Get the value of time
   */
  public function getTime(): Time
  {
    return $this->time;
  }

  /**
   * Set the value of time
   */
  public function setTime(Time $time): self
  {
    $this->time = $time;

    return $this;
  }
}




































