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
        $this->pontos = 1000;
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


//$Cespa = [];


$nomeBaralhos = ["Baralho Frances","Baralho Espanhol"];
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
$totalB = count($Baralhos)/2;
$qtdCartasDEFINITIVO = 7;

$cartas = [];
$LojaSkills = ["Deletar Carta","Revelar Carta","Reescolher Carta",$nomeBaralhos[$defaultB+1],"???"];
$precos = [50,80,30,10,100];
$opcoesInic = ["Jogar","Stats","Loja"];



system('clear');
montarMenu(false,"Criacao de Jogador");//talvez eu arrume o problema do menu não aceitar uns troço do PT-BR TALVEZ
$jogador = new Player(readline("Qual o seu nickname?"));



while(true){
    system('clear');
    //montarMenu(true,"Jogar","Stats","Loja");
    arrayMenu(true,$opcoesInic);
    //print_r($cartas);
    $opValue = readline();
    
    
    if($opValue == 1){
        $qtdCartas = $qtdCartasDEFINITIVO;
        $cartas = [];
        $repsW = 0;
        $validDeck = true;


        for($i=0; $i < $qtdCartas; $i++){ 
            $randC = generateCartas($Baralhos,$defaultB);
            $cartas[$i] = new Cartas($Baralhos[$defaultB][$randC[0]],$Baralhos[$defaultB+1][$randC[1]]);
            //print $cartas[$i]->getNumero()."\n".$cartas[$i]->getNome()."\n";
            $validDeck = validCard($cartas);
            if($validDeck == false){
                $i--;
            }
            
        }
        $aCarta = array_rand($cartas,1);
        $dica = $cartas[$aCarta]->getDica();
        $cartaSkills = $cartas;
        $cartaSkills[$qtdCartas] = "Escolha uma carta para aplicar a Habilidade";
        $cartas[$qtdCartas] = "Skills";
        //Valor de Habilidades{Limita a quantidade de vezes que você pode usar elas}
        $valueDica = 1;
        $valueRM = 1;
        $valueRV = 1;
        $valueREE = 1;

        $tentativas = 2;
        while($tentativas > 0){
            
            system('clear');
            arrayMenu(false,$cartas);
            
            print $aCarta;
            $opValue = readline();
            if($opValue <= $qtdCartas){
                if(rightCard($opValue,$aCarta,$jogador,$cartas)){
                    break;
                }
            }else{
                while(true){
                    system('clear');
                    arrayMenu(true,$jogador->getHabilidades());
                    $opValue = readline();
                    if($opValue > 0){
                        if($jogador->getHabilidades()[$opValue-1] == "Dica" and $valueDica > 0){
                            while(true){
                                system('clear');
                                montarMenu(true,"Sua dica sobre a carta escolhida e essa:".$dica);
                                $valueDica--;
                                $opValue = readline();
                                if($opValue == 0){
                                    break;
                                }
                            }
                        }elseif(in_array("Deletar Carta",$jogador->getHabilidades()) and $jogador->getHabilidades()[$opValue-1] == "Deletar Carta" and $valueRM > 0){
                            do{
                                system('clear');
                                arrayMenu(false,$cartaSkills);
                                $opValue = readline();
                                if($opValue <= $qtdCartasDEFINITIVO){
                                    if($opValue-1 < $aCarta){
                                        $aCarta--;
                                    }
                                    unset($cartas[$opValue-1]);
                                    unset($cartaSkills[$opValue-1]);
                                    $cartas = array_values($cartas);//Reindexa as keys do array
                                    $cartaSkills = array_values($cartaSkills);//Reindexa as keys do array
                                    $qtdCartas--;
                                    $valueRM--;
                                }


                            }while($opValue > $qtdCartasDEFINITIVO);
                        }elseif(in_array("Revelar Carta",$jogador->getHabilidades()) and $jogador->getHabilidades()[$opValue-1] == "Revelar Carta" and $valueRV > 0){
                            do{
                                system('clear');
                                arrayMenu(false,$cartaSkills);
                                $opValue = readline();
                                if($opValue <= $qtdCartas){
                                    $tentativas++;
                                    if(rightCard($opValue,$aCarta,$jogador,$cartas)){
                                        break 3;//um break com valor na frente quebra mais que um laço
                                    }


                                    $valueRV--;
                                }


                            }while($opValue > $qtdCartas);
                        }elseif(in_array("Reescolher Carta",$jogador->getHabilidades()) and $jogador->getHabilidades()[$opValue-1] == "Reescolher Carta"){
                            system('clear');
                            montarMenu(false,"Carta foi Reescolhida");
                            $aCarta = rand(0,$qtdCartas-1);
                            sleep(3);
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
            $qtdLoja = count($LojaSkills);
            system('clear');
            arrayMenu(true,$LojaSkills);//montarMenu(true,"Deletar Carta","Revelar Carta","Reescolher Carta");
            print "{PONTOS}- $". $jogador->getPontos()."\n";
            $opValue = readline();
            $lojaValue = $opValue;
            if($opValue <= $qtdLoja and $opValue !=0){
                    while(true){
                    system('clear');
                    montarMenu(true,"Comprar Item '". $LojaSkills[$lojaValue-1] ."' por: $". $precos[$lojaValue-1] );
                    //print_r($LojaSkills);
                    $opValue = readline();
                    if($opValue == 1 and $jogador->getPontos() >= $precos[$lojaValue-1]){
                        $jogador->addPontos(-$precos[$lojaValue-1]);
                        if(in_array($LojaSkills[$lojaValue-1],$nomeBaralhos)){
                            trocarBaralho($defaultB,$totalB);
                            break;
                        }

                        if($LojaSkills[$lojaValue-1] == "???"){
                            $opcoesInic[] = "Apostas";
                        }else{
                            $jogador->setHabilidades($LojaSkills[$lojaValue-1]);
                        }
                        unset($LojaSkills[$lojaValue-1]);
                        $LojaSkills = array_values($LojaSkills);//Reindexa as keys do array
                        break;
                        
                    }elseif($opValue == 0){
                        break;
                    }
                    
                }
                    
                }elseif($opValue == 0){
                    break;
                }





        }
    }elseif($opValue == 4){
        system('clear');
        montarMenu(false,"Bem Vindo!");
        sleep(1);
        system('clear');
        montarMenu(false,"Bem Vindo!Voce esta na Casa das Apostas!");
        sleep(3);
        
        while(true){
            system('clear');
            montarMenu(true,"Jogar");
        }

    }
    
    
    
    
    
    
    
    
    
    
}







function trocarBaralho(&$defaultB , $limite){//Muda o Baralho disponivel na Loja
    
    if($defaultB < $limite){
        $defaultB += 2;
        $GLOBALS['LojaSkills'][$GLOBALS['lojaValue']-1] = $GLOBALS['nomeBaralhos'][($defaultB/2)+1];
    }else{
        $defaultB = 0;
        $GLOBALS['LojaSkills'][$GLOBALS['lojaValue']-1] = $GLOBALS['nomeBaralhos'][$defaultB+1];
    }
    if($defaultB == $limite){
        $GLOBALS['LojaSkills'][$GLOBALS['lojaValue']-1] = $GLOBALS['nomeBaralhos'][0];
    }

}




function validCard(array $Deck){//Checka se a carta não repete

    $repCard = $Deck [0];
    unset($Deck[0]);//remove o item do array
    foreach($Deck as $card){
        if($repCard == $card){
            return false;
        }
    }
    return true;




}




function rightCard($ans,$aCarta,$jogador,array $cartas){//Checka se voce acertou a carta
    $win = false;
    if($ans == $aCarta+1){

        system('clear');
        montarMenu(false,"CORRETO!Player ".$jogador->getNome()." ganhou $".(10*$GLOBALS['tentativas'])/$GLOBALS['valueDica']." Pontos");
        $jogador->addPontos( (10*$GLOBALS['tentativas'])/$GLOBALS['valueDica'] );
        $jogador->addPartidas(1,1);
        //$cartas = [];por alguma razão não funcionou
        sleep(5);//faz o programa esperar uma quantidade de segundos
        $win = true;
        return $win;

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
            //$cartas = [];por alguma razão não funcionou
            sleep(3);//faz o programa esperar uma quantidade de segundos
            $win = true;
            return $win;
        }
    }
    return $win;
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
