<?php

class Pessoa{

    private string $nome;
    private string $sobrenome;
    private int $idade;

    //__construct
    public function __construct($n,$sn,$i){
        $this->nome = $n;
        $this->sobrenome = $sn;
        $this->idade = $i;
    }
    //__toString
    public function __toString(){
        return  "[NOME]- ".$this->nome.
                "\n[SOBRENOME]- ".$this->sobrenome.
                "\n[IDADE]- ".$this->idade;
              
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
     * Get the value of sobrenome
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}
$pessoas[] = new Pessoa("Daniel","Di Domenico", 0);

menuP($pessoas);


function menuP(array $pessoas){
    $opValue = 9999;
    while($opValue != 0){
        system('clear');
        print "**********************\n".
            "*1-Cadastrar Pessoa  *\n".
            "**********************\n".
            "*2-Remover Pessoa    *\n".
            "**********************\n".
            "*3-Listar Pessoas    *\n".
            "**********************\n".
            "*0-Sair              *\n".
            "**********************\n";
        $opValue = readline();

        if($opValue == 1){
            cadastrarP($pessoas);
        }elseif($opValue == 2){
            removerP($pessoas);
        }elseif($opValue == 3){
            listarP($pessoas);            
        }
    }
    die;
}
function cadastrarP(array $pessoas){
    $opValue = 9999;
    $pNull = 0;
    $totalLisP = count($pessoas);
    for($i=0; $i < $totalLisP; $i++){
         
        if($pessoas[$i]->getIdade() == 14211212){
            $pNull++;
            $psNull[] = $i;
        }
    }
    while(true){
        system('clear');
        print count($pessoas)."\n". $pNull;
        print"***********************\n".
             "*1-Inserir Informações*\n".
             "***********************\n".
             "*0-Voltar             *\n".
             "***********************\n";
        $opValue = readline();
        
        if($opValue == 1 and $pNull == 0){
            system('clear');
            $pessoas[] = retornarCadP();
        }elseif($opValue == 1 and $pNull > 0){
            while(true){
                system('clear');
                print"Existem valores vazios.Você quer cadastrar essa pesosa sobre um deles???\n('exit' para sair)". 
                     "\n----------------";
                foreach($psNull as $null){
                    print"\n[ID]- ".$null."\n";
                }
                $opValue = readline();
                if($totalLisP ){

                }
            }

        }elseif($opValue == 0){
            menuP($pessoas);
        }
    }
}


function removerP(array $pessoas){
    $opValue = 9999;
    $remValue= -1;
    while(true){
        system('clear');
        print"***********************\n". 
             "*1-Selecionar pessoa  *\n". 
             "***********************\n". 
             "*0-Voltar             *\n".
             "***********************\n";
        $opValue =readline();
        if($opValue == 1){
            system('clear');
            for($i=0; $i <count($pessoas); $i++){ 
                print"[ID]- ".$i.
                     "\n".$pessoas[$i].
                     "\n------\n";
            }
            print"('exit' Para sair)\n";
            $remValue = readline("Escolha o ID.");
            if($remValue == "exit"){
                $opValue = 0;
            }elseif($remValue >= 0 and $pessoas[$remValue]->getNome != 'NULL'){
                $pessoas[$remValue]->setNome("NULL")->setSobrenome("NULL")->setIdade(14211212);//14 21 12 12 NULL em a1 z26            
            }        
        }elseif($opValue == 0){
           menuP($pessoas);
        }
    }
}
function listarP(array $pessoas){
    $opValue = 9999;
    while(true){
        system('clear');
        print"***********************\n".
             "*0-Voltar             *\n".
             "***********************\n";
        for($i=0; $i <count($pessoas); $i++){ 
            print"[ID]- ".$i.
                 "\n".$pessoas[$i].
                 "\n------\n";
        }
        $opValue =readline();
        if($opValue == 0){
            menuP($pessoas);
        }
    }
}





function retornarCadP(){
    $pessoa = new Pessoa(readline("Qual o nome da Pessoa?- "),
    readline("Qual o sobrenome da Pessoa?- "),
    readline("Qual a idade da Pessoa?- "));
    return $pessoa;
}










