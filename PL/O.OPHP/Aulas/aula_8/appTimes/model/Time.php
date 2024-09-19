<?php


class Time{
    private $nome;
    private $cidade;
    private array $jogadores;




    



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
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of jogadores
     */
    public function getJogadores(): array
    {
        return $this->jogadores;
    }

    /**
     * Set the value of jogadores
     */
    public function setJogadores(array $jogadores): self
    {
        $this->jogadores = $jogadores;

        return $this;
    }
}