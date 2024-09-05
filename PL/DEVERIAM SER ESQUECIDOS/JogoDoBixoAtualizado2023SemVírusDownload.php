<?php
    $jogo = "";
    $numChosen = 1902;
    $sure = "";
    $randas = "pepito";
    $numbers;
    $nUSER;
    $numsUSER;
    $all_USER;
    $choices = false;
    
    while(($jogo != "Mega-sena" and $jogo != "mega-sena" and $jogo != "mega sena" and $jogo != "Mega sena") and ($jogo != "Quina" and $jogo != "quina") and ($jogo != "Lotomania" and $jogo != "lotomania") and ($jogo != "Lotofácil" and $jogo != "Lotofacil" and $jogo != "lotofácil" and $jogo != "lotofacil")){
        $jogo = readline("Qual jogo você quer jogar?(Mega-Sena, Quina, Lotomania e Lotofácil)|");
        system('clear');//tem que usar cls pro windows    
    }
       
    $dez_MegaSena = [6,20];
    $dez_Quina = [5,15];
    $dez_Lotomania = 50;
    $dez_Lotofacil = [15,20];
    $val_MegaSena = [5,35,140,420,1050,2310,4620,8580,15015,25025,40040,61880,92820,135660,193800];
    $val_Quina = [2.50,15,52.50,140,315,630,1155,1980,3217.50,5005,7507.50];
    $val_Lotomania = 3;
    $val_Lotofacil = [3,48,408,2448,11628,46512];
    $all_MegaSena = [01,60];
    $all_Quina = [01,80];
    $all_Lotomania = [01,100];
    $all_Lotofacil = [01,25];
    $MegaSenaNums = 6;
    $QuinaNums = 5;
    $LotomaniaNums = 20;
    $LotofacilNums = 15;

    if($jogo == "Mega-sena" or $jogo == "mega-sena" or $jogo == "mega sena" or $jogo == "Mega sena"){
        $numsUSER = $MegaSenaNums;
        $all_USER[0] = $all_MegaSena[0];
        $all_USER[1] = $all_MegaSena[1];
        while($numChosen < $dez_MegaSena[0] or $numChosen > $dez_MegaSena[1]){
            
            $numChosen = readline("Quantas dezenas você quer?Mínimo = {".$dez_MegaSena[0]."} Máximo = {".$dez_MegaSena[1]."}|");
            $numChosen = intval($numChosen,10);
            while(($sure != "nao" and $sure != "não" and $sure != "Não" and $sure != "Nao") and ($sure != "sim" and $sure != "Sim")and($numChosen >= $dez_MegaSena[0] and $numChosen <= $dez_MegaSena[1])){
                system('clear');
                $sure = readline("Você tem certeza?O custo disso será R$".$val_MegaSena[$numChosen-6].'|');
                if($sure == "nao" or $sure == "não" or $sure == "Não" or $sure == "Nao"){
                    $numChosen = 1902;
                }
            }
            
        }
    }elseif($jogo == "Quina" or $jogo == "quina"){
        $numsUSER = $QuinaNums;
        $all_USER[0] = $all_Quina[0];
        $all_USER[1] = $all_Quina[1];
        while($numChosen < $dez_Quina[0] or $numChosen > $dez_Quina[1]){
          
            $numChosen = readline("Quantas dezenas você quer?Mínimo = {".$dez_Quina[0]."} Máximo = {".$dez_Quina[1]."}|");
            $numChosen = intval($numChosen,10);
            while(($sure != "nao" and $sure != "não" and $sure != "Não" and $sure != "Nao") and ($sure != "sim" and $sure != "Sim")and($numChosen >= $dez_Quina[0] and $numChosen <= $dez_Quina[1])){
                system('clear');
                $sure = readline("Você tem certeza?O custo disso será R$".$val_Quina[$numChosen-5].'|');
                if($sure == "nao" or $sure == "não" or $sure == "Não" or $sure == "Nao"){
                    $numChosen = 1902;
                }
            }
        
        }
    }elseif($jogo == "Lotomania" or $jogo == "lotomania"){
        $numsUSER = $LotomaniaNums;
        $all_USER[0] = $all_Lotomania[0];
        $all_USER[1] = $all_Lotomania[1];
        while($numChosen > $dez_Lotomania or $numChosen < 0){
         
            $numChosen = readline("Quantas dezenas você não quer randomizar? Máximo = ".$dez_Lotomania.'|');
            $numChosen = intval($numChosen,10);
            while(($sure != "nao" and $sure != "não" and $sure != "Não" and $sure != "Nao") and ($sure != "sim" and $sure != "Sim") and ($numChosen <= $dez_Lotomania and $numChosen >0)){
                system('clear');
                $sure = readline("Você tem certeza?O custo disso será R$".$val_Lotomania.'|');
                if($sure == "nao" or $sure == "não" or $sure == "Não" or $sure == "Nao"){
                    $numChosen = 1902;
                }
            }
        
        }
    }elseif($jogo == "Lotofacil" or $jogo == "lotofacil" or $jogo == "Lotofácil" or $jogo == "lotofácil"){
        $numsUSER = $LotofacilNums;
        $all_USER[0] = $all_Lotofacil[0];
        $all_USER[1] = $all_Lotofacil[1];
        while($numChosen < $dez_Lotofacil[0] or $numChosen > $dez_Lotofacil[1]){
       
            $numChosen = readline("Quantas dezenas você quer?Mínimo = ".$dez_Lotofacil[0]." Máximo = ".$dez_Lotofacil[1].'|');
            $numChosen = intval($numChosen,10);
            while(($sure != "nao" and $sure != "não" and $sure != "Não" and $sure != "Nao") and ($sure != "sim" and $sure != "Sim") and($numChosen >= $dez_Lotofacil[0] and $numChosen <= $dez_Lotofacil[1])){
                $sure = readline("Você tem certeza?O custo disso será R$".$val_Lotofacil[$numChosen-15].'|');
                if($sure == "nao" or $sure == "não" or $sure == "Não" or $sure == "Nao"){
                    $numChosen = 1902;
                }
            }
        
        }
        
       
    }
    if($jogo != "Lotomania" and $jogo != "lotomania"){
        do{
            $randas = readline("Você quer randomizar as suas escolhas?|");
            system('clear');
        } while(($randas !="nao" and $randas != "não" and $randas !="Não" and $randas !="Nao") and ($randas !="Sim" and $randas != "sim"));
           
        
    }
    if(($randas != "Sim " or $randas != "sim") and ($randas == "pepito" or ($randas =="nao" or $randas == "não" or $randas =="Não" or $randas =="Nao"))){
        for($i=1; $i < $numChosen+1; $i++){ 
            do{
                $choices = readline("Qual número você quer escolher na posição $i? Valor min[". $all_USER[0] ."] Valor max[". $all_USER[1] ."]|");
                system('clear');
            }while((is_numeric($choices) != true) or ($choices > $all_USER[1] or $choices < $all_USER[0]));
            $nUSER[] = $choices;
            
        }
        


    }
    numbers($all_USER[0],$all_USER[1],$numsUSER,$jogo,$numChosen,$randas);    
    
    





    function numbers($min,$max,$quant,$jogo,$num,$accept){   // quant é o nums|num é o numChosen|accept é o randas
        $arrecada = rand(1000000,20000000);
        for($i=0; $i < $quant; $i++) { 
            $GLOBALS['numbers'][]= rand($min,$max);
            
        }
        if(($jogo == "Lotomania" or $jogo == "lotomania") and $num < 50){
            for ($i=0; $i < ($GLOBALS['dez_Lotomania']-$num); $i++) { 
                $GLOBALS['nUSER'][]= rand($min,$max);
                
            }

        }elseif($accept == "Sim" or $accept =="sim"){
            for ($i=0; $i < $num; $i++) { 
                $GLOBALS['nUSER'][] = rand($min,$max);
                
            }

        }
        sort($GLOBALS['numbers'],SORT_NUMERIC);
        sort($GLOBALS['nUSER'],SORT_NUMERIC);
        $result = array_intersect($GLOBALS['numbers'],$GLOBALS['nUSER']);
        $acertos = sizeof($result);
        if(($acertos == 0 and ($jogo == "Lotomania" or $jogo == "lotomania")) or $acertos > 0){
        
            
            
                if($jogo == "Mega-sena" or $jogo == "mega-sena" or $jogo == "mega sena" or $jogo == "Mega sena"){
                    if ($acertos == 6) {
                        print "Parabéns!!!Você acertou 6 números.Você ganhou:R$". round($arrecada*0.35, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 5 or $acertos == 4) {
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.19, 2, PHP_ROUND_HALF_UP);
                    }
                }elseif($jogo == "Quina" or $jogo == "quina"){
                    if ($acertos == 5) {
                        print "Parabéns!!!Você acertou 5 números.Você ganhou:R$". round($arrecada*0.35, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 4) {
                        print "Parabéns!!!Você acertou 4 números.Você ganhou:R$". round($arrecada*0.15, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 3 or $acertos == 2){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.10, 2, PHP_ROUND_HALF_UP);
                    }
                }elseif($jogo == "Lotomania" or $jogo == "lotomania"){
                    if ($acertos == 20) {
                        print "Parabéns!!!Você acertou 20 números.Você ganhou:R$". round($arrecada*0.45, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 19) {
                        print "Parabéns!!!Você acertou 19 números.Você ganhou:R$". round($arrecada*0.16, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 18){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.10, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 17 or $acertos == 16 or $acertos == 15 ){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.07, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 0){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.08, 2, PHP_ROUND_HALF_UP);
                    }
                }elseif($jogo == "Lotofacil" or $jogo == "lotofacil" or $jogo == "Lotofácil" or $jogo == "lotofácil"){
                    if($acertos == 15){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.62, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 14){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". round($arrecada*0.13, 2, PHP_ROUND_HALF_UP);
                    }elseif($acertos == 13){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". 30;
                    }elseif($acertos == 12){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". 12;
                    }elseif($acertos == 11){
                        print "Parabéns!!!Você acertou $acertos números.Você ganhou:R$". 6;
                    }
                }
            
        }else{
            print'Não foi dessa vez:(';
        }
        
    }