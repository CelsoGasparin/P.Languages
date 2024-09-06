<?php




function lerT(){
    $arq1 = fopen('/dev/stdin','r');
    $tecla = fgets($arq1,255);
    fclose($arq1);
    return $tecla;//COMPLETAMENTE DESNECESSÁRIO EU FIZ PQ DEU VONTADE É LITERALEMENTE UM READLINE atualizações acabei de perceber que é pior que o readline.ebaaa
}

class Pokemon{

    public $baseHP;
    public $baseATK;
    public $baseDEF;
    public $baseSPATK;
    public $baseSPDEF;
    public $baseSPE;

    public $lvl;
    public $xp;
    public $nome;
    public $apel;
    private array $tipos;

    public $HP;
    public $ATK;
    public $DEF;
    public $SPATK;
    public $SPDEF;
    public $SPE;
    

    function __construct(string $nome,int $l, $bH,int $bA,int $bD,int $bSA,int $bSD,int $bS){
        $qtip = 0;
        $this->xp = 0;
        $this->baseHP=$bH;
        $this->baseATK=$bA;
        $this->baseDEF=$bD;
        $this->baseSPATK=$bSA;
        $this->baseSPDEF=$bSD;
        $this->baseSPE=$bS;
        $this->nome= $nome;
        $this->lvl=$l;
        $this->HP = (round($this->baseHP/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+10;
        $this->ATK = (round($this->baseATK/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+5;
        $this->DEF = (round($this->baseDEF/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+5;
        $this->SPATK = (round($this->baseSPATK/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+5;
        $this->SPDEF = (round($this->baseSPDEF/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+5;
        $this->SPE = (round($this->baseSPE/50,0,PHP_ROUND_HALF_UP)*$this->lvl)+5;

        while($qtip !=2 and $qtip != 1) {
            print "O seu pokemon tem 1 ou 2 Tipos?\n -1-Um tipo -2-Dois tipos";
            $qtip = lerT();
        }
        for ($i=0; $i < $qtip; $i++) { 
            $this->tipos[] = readline("Qual o tipo desse pokemon?");
            
        }
        $qtip = 2;
        while($qtip != 0 and $qtip != 1) {
            print "Quer dar um apelido ao seu pokemon?\n -1-sim -0-não";
            $qtip = lerT();
        }
        $this->apel = 'nenhum';
        for ($i=0; $i < $qtip; $i++) { 
            $this->apel = readline("Qual o apelido desse pokemon?");
            
        }
    }

    function check(){
        print "[Nome]".$this->nome."\n[Apelido]".$this->apel."\n[Level]".$this->lvl."\n[HP]".$this->HP."\n[ATK]".$this->ATK."\n[DEF]".$this->DEF."\n[SPATK]".$this->SPATK."\n[SPDEF]".$this->SPDEF."\n[SPE]".$this->SPE;
    }

    function daycare(){
        $qtip = "oi";
        while(is_int($qtip) == false) {
            print "Quanto tempo seu pokemon vai passar aqui?\n";
            $qtip = lerT();
        }
        $this->xp += 7500*$qtip;
    }

    function lvl_up(){
        $req = pow($this->lvl,3);
        while($this->xp >= $req){
            $req = pow($this->lvl,3);
            $this->xp -=$req;
            $this->lvl++;
        }
    }

}
$vaporeon= new Pokemon("Vaporeon",100,130,65,60,110,95,65);
$vaporeon->check();







