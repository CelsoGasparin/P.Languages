<?php



class Exemplo {



    public function escreva($v=null,$w=null){
        if($v != null && $w != null) {
            print"Valores: ".$v.",".$w."\n";
        }elseif($w == null ){
            print"Valor: ".$v."\n";
        }else{
            print"Não tem valor\n";
        }
    }

}