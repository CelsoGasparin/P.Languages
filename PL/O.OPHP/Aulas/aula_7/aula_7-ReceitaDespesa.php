<?php

require "/home/lab/fun/menuFun.php";//https://github.com/CelsoGasparin/P.Languages/blob/main/PL/PHP/menuFun.php

class Receita{
    private string $descricao;
    private float $valor;

    //__construct
    public function __construct($d,$v){
        $this->descricao = $d;        
        $this->valor = round($v,2,PHP_ROUND_HALF_DOWN);
    }
    //__toString
    public function __toString(){
        return "[Descrição]-".$this->descricao."\n[Valor]-R$".$this->valor;
    }








    /**
     * Get the value of descricao
     */
    public function getDescricaoR(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricaoR(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValorR()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValorR($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

class Despesa{
    private string $descricao;
    private float $valor;

    //__construct
    public function __construct($d,$v){
        $this->descricao = $d;        
        $this->valor = round($v,2,PHP_ROUND_HALF_DOWN);
    }
    //__toString
    public function __toString(){     
        return "[Descrição]-".$this->descricao."\n[Valor]-R$".$this->valor;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricaoD(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricaoD(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValorD()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValorD($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}
$receitas = [];
$despesas = [];

while(true){
    system('clear');
    montarMenu("Adcionar Receita","Adcionar Despesa"
                ,"Listar Receitas","Listar Despesas"
                ,"Sumarizar");
    $opValue = readline();
    if($opValue == 1){
        system('clear');
        $receitas[] = new Receita(readline("De onde você conseguiu esse dinheiro?"),
        readline("Quanto Reais que você ganhou?"));
    }elseif($opValue == 2){
        system('clear');
        $despesas[] = new Despesa(readline("Como que você gastou esse dinheiro?"),
        readline("Quanto Reais que você gastou?"));
    }elseif($opValue == 3){
        while(true){
            system('clear');
            montarMenu();
            foreach($receitas as $receita){
                print $receita."\n----------\n";
            }
            $opValue = readline();
            if($opValue == 0){
                break;
            }            
        }
    }elseif($opValue == 4){
        while(true){
            system('clear');
            montarMenu();
            foreach($despesas as $despesa){
                print $despesa."\n----------\n";
            }
            $opValue = readline();
            if($opValue == 0){
                break;
            }            
        }
    }elseif($opValue == 5){
        while(true){
            system('clear');
            montarMenu();
            print"[TotalReceitas]-R$".totalReceita($receitas)."\n[TotalDespesas]-R$".totalDespesa($despesas)
            ."\n--------\n[Saldo]-R$". saldo($receitas,$despesas)."\n";
            $opValue = readline();
            if($opValue == 0){
                break;
            }
        }
    }
    elseif($opValue == 0){
        break;
    }elseif($opValue == 1921415){
        while(true){
            system('clear');
            montarMenu("Remover Receita","Remover Despesa");
            $opValue = readline();
            if($opValue == 1){
                while(true){
                    system('clear');
                    //print_r($receitas);
                    montarMenu();
                    $id = 0;
                    foreach($receitas as $receita){
                        print "{ID=".$id++ +1 ."}".$receita."\n----------\n";
                    }
                    $opValue = readline();
                    if($opValue > 0){
                        unset($receitas[$opValue-1]);
                        sort($receitas);
                    }elseif($opValue == 0){
                        break;
                    }
                }
            }elseif($opValue == 2){
                while(true){
                    system('clear');
                    //print_r($despesas);
                    montarMenu();
                    $id = 0;
                    foreach($despesas as $despesa){
                        print "{ID=".$id++ +1 ."}".$despesa."\n----------\n";
                    }
                    $opValue = readline();
                    if($opValue > 0){
                        unset($despesas[$opValue-1]);
                        sort($despesas);
                    }elseif($opValue == 0){
                        break;
                    }
                }
            }elseif($opValue == 0){
                break;
            }
        }
    }
}



function saldo(array $receitas,array $despesas){
    $valorTotal = 0;
    foreach($receitas as $receita){
        $valorTotal += $receita->getValorR();
    }
    foreach($despesas as $despesa){
        $valorTotal -= $despesa->getValorD();
    }
    return round($valorTotal,2,PHP_ROUND_HALF_DOWN);
}
function totalReceita(array $receitas){
    $valor = 0;
    foreach($receitas as $receita){
        $valor += $receita->getValorR();
    }
    return round($valor,2,PHP_ROUND_HALF_DOWN);
}
function totalDespesa(array $despesas){
    $valor = 0;
    foreach($despesas as $despesa){
        $valor += $despesa->getValorD();
    }
    return round($valor,2,PHP_ROUND_HALF_DOWN);
}







