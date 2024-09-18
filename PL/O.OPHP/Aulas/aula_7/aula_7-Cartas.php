<?php


class Player{


    private $nome;
    private $pontos;
    private array $partidas;//[0]para conseguir as derrotas e [1]para conseguir as vitórias
    private array $habilidades;


    //__construct
    public function __construct($n){
        
        $this->nome = $n;
        $this->habilidades[] = "Dica";
        $this->pontos = 0;
        $this->partidas[0] = 0;
        $this->partidas[1] = 0;

    }


    //__toString
    public function __toString(){
        
        return "[Nome]- ". $this->nome.
        "\n[Pontos]- $". $this->pontos.
        "\n[PartidasTotal]- ". $this->partidas[0]+$this->partidas[1].
        "\n[PartidasDerrotas]- ". $this->partidas[0].
        "\n[PartidasVitórias]- ". $this->partidas[1].
        "\n". $this->showHabilidades();


    }








    //get&set&sshowHabilidades

    public function getHabilidades(){
        return $this->habilidades;
    }
    public function setHabilidades($hb){
        $this->habilidades[] = $hb;
    }
   public function showHabilidades(){
    
        $string = "";
        foreach($this->habilidades as $hab){
            $string .= "[Habilidade]- ". $hab."\n";
        }
        return $string;
    }

    //get&set&addPontos

    public function getPontos(){
        return $this->pontos;
    }
    public function setPontos($p){
        $this->pontos = $p;
    }
    public function addPontos($p){
        $this->pontos += $p;
    }

    //get&setNome

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nm){
        $this->nome = $nm;
    }

    //get&addPartida
    public function getPartidas($index){
        return $this->partidas[$index];
    }

    public function addPartidas($p,$index){
        $this->partidas[$index] += $p;
    }
}



















class Cartas {
    
    private $numero;
    private $nome;
    
    //__construct
    public function __construct($num,$nom){
        
        $this->numero = $num;
        $this->nome = $nom;


    }
    //__toString
    public function __toString(){
        
        return $this->nome."~".$this->numero;



    }




    //getDica
    public function getDica(){
        
        if(rand(0,1) == 1){
            return $this->nome;
        }else{
            return $this->numero;
        }
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
}


$Cespa = [];




$Baralhos = [
    0=>[    
    1,2,3,4,5,
    6,7,8,9,10,
    "Valete",
    "Dama",
    "Rei",
    
    
    ],//Baralho francês de 52 cartas

    1=>[
    "Paus",
    "Ouros",
    "Copas",
    "Espadas"

    ],//Baralho francês de 52 cartas

    2=>[
    1,2,3,4,5,
    6,7,8,9,
    "Sota",
    "Cavalo",
    "Rei",
    


    
    
    ],//Baralho espanhol
    
    3=>[    
    "Ouros",
    "Espadas",
    "Copas",
    "Bastos"
    ]//Baralho espanhol




];
$defaultB = 0;
$qtdCartas = 7;
$cartas = [];
$LojaSkills = ["Deletar Cartas","Revelar Carta","Reescolher Carta","???"];
$precos = [50,80,30,100];




system('clear');
montarMenu(false,"Criacao de Jogador");//talvez eu arrume o problema do menu não aceitar uns troço do PT-BR TALVEZ
$jogador = new Player(readline("Qual o seu nickname?"));



while(true){
    system('clear');
    montarMenu(true,"Jogar","Stats","Loja");
    //print_r($cartas);
    $opValue = readline();
    
    
    if($opValue == 1){
        for($i=0; $i < $qtdCartas; $i++){ 
            $randC = generateCartas($Baralhos,$defaultB);
            $cartas[$i] = new Cartas($Baralhos[$defaultB][$randC[0]],$Baralhos[$defaultB+1][$randC[1]]);
            //print $cartas[$i]->getNumero()."\n".$cartas[$i]->getNome()."\n";
        }
        $aCarta = array_rand($cartas,1);
        $cartas[$qtdCartas] = "Skills";
        $valueDica = 1;
        $dica = $cartas[$aCarta]->getDica();
        $tentativas = 2;
        while($tentativas > 0){
            
            system('clear');
            arrayMenu(false,$cartas);
            //print $aCarta;
            $opValue = readline();
            if($opValue <= $qtdCartas){
                $win = false;
                $win = rightCard($opValue,$aCarta,$jogador,$cartas);
                if($win){
                    break;
                }
            }else{
                while(true){
                    system('clear');
                    arrayMenu(true,$jogador->getHabilidades());
                    $opValue = readline();
                    if($opValue > 0){
                        if($jogador->getHabilidades()[$opValue-1] == "Dica" and $valueDica == 1){
                            while(true){
                                system('clear');
                                montarMenu(true,"Sua dica sobre a carta escolhida e essa:".$dica);
                                $valueDica++;
                                $opValue = readline();
                                if($opValue == 0){
                                    break;
                                }
                            }
                        }
                    }elseif($opValue == 0){
                        break;
                    }
                }
            }
            
        }
        
    }elseif($opValue == 2){
        while(true){
            system('clear');
            montarMenu();
            print $jogador;
            $opValue = readline();
            if($opValue == 0){
                break;
            }





        }


    }elseif($opValue == 3){
        while(true){
            system('clear');
            arrayMenu(true,$LojaSkills);//montarMenu(true,"Deletar Carta","Revelar Carta","Reescolher Carta");
            print "{PONTOS}- $". $jogador->getPontos()."\n";
            $opValue = readline();




        }
    }
    
    
    
    
    
    
    
    
    
    
}










function rightCard($ans,$aCarta,$jogador,array $cartas){

    if($ans == $aCarta+1){
        system('clear');
        montarMenu(false,"CORRETO!Player ".$jogador->getNome()." ganhou $".(5*$GLOBALS['tentativas'])/$GLOBALS['valueDica']." Pontos");
        $jogador->addPontos( (5*$GLOBALS['tentativas'])/$GLOBALS['$valueDica'] );
        $jogador->addPartidas(1,1);
        $cartas = [];
        sleep(5);//faz o programa esperar uma quantidade de segundos
        return true;
    }else{
        system('clear');
        montarMenu(false,"ERRADO!");
        $GLOBALS['tentativas']--;
        sleep(2);
        
        if($GLOBALS['tentativas'] == 0){
            system('clear');
            montarMenu(false,"ERRADO!Player ".$jogador->getNome()." perdeu $3 Pontos");
            $jogador->addPontos(-3);
            $jogador->addPartidas(1,0);
            $cartas = [];
            sleep(3);//faz o programa esperar uma quantidade de segundos
            return true;
        }
    }
}
function generateCartas(array $Cartas,$Chosen){
    $mao = [];
    
    $mao[0] = array_rand($Cartas[$Chosen],1);
    $mao[1] = array_rand($Cartas[$Chosen + 1],1);
        
    return $mao;
}
function arrayMenu(bool $sair = true,array $itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 3; 
    $sizeInte = $sizeTab+3;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - (strlen($itens[$i])+strlen($i)))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    if($sair){
        print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0])-1)."]\n";
        print str_repeat("=",$sizeInte)."\n";
    }
}
function montarMenu(bool $sair = true,...$itens){
    array_unshift($itens,"Sair");
    $sizeTab = strlen($itens[0]);
    foreach($itens as $item){
        $aSize =strlen($item);
        if($sizeTab < $aSize){
            $sizeTab = $aSize;
        }
    }
    $sizeTab += 4; 
    $sizeInte = $sizeTab+3;
    print str_repeat("=",$sizeInte)."\n";
    
    $qtdItens = count($itens);
    for($i = 1;$i < $qtdItens;$i++){
        print "[$i-".$itens[$i].str_repeat(" ",$sizeTab - (strlen($itens[$i])+strlen($i)))."]\n";
        print str_repeat("=",$sizeInte)."\n";
        
    }
    if($sair){        
        print "[0-".$itens[0].str_repeat(" ",$sizeTab - strlen($itens[0])-1)."]\n";
        print str_repeat("=",$sizeInte)."\n";
    }

}
