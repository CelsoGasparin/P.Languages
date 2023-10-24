programa
{
	
	funcao inicio()
	{
		inteiro bin [12] = {0,0,0,0,0,0,0,0,0,0,0,0}
		inteiro valoroctal = 0, valordec, contador = -1
		escreva("Me informe um valor em decimal para traduzir para Binário e Octal.\n")
		leia(valordec)
		para(inteiro i = 2 ; i <= 4098;i *= 2){
			contador++
			se(valordec%i >= i/2){
				
				bin[contador] = 1
				
			}

		}
		contador = 0
		
		para(inteiro oc = 1;oc<= 1000;oc *= 10){
			
			se(bin[contador] == 1){
		 		valoroctal += 1*oc
		 	}
		 	contador++
		 	se(bin[contador] == 1){
		 		valoroctal += 2*oc
		 	}
		 	contador++
			se(bin[contador] == 1){
		 		valoroctal += 4*oc
		 	}
		 	contador++
		     
			 
	   }
			 
		

		
		para(inteiro b = 11; b>= 0;b--){
			escreva(bin[b])
		}
		escreva("\n", valoroctal)
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 421; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {contador, 7, 36, 8};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */