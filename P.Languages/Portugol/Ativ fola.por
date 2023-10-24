programa
{
	inclua biblioteca Matematica --> m
	inclua biblioteca Texto --> txt
	inclua biblioteca Util --> u
	
	funcao inicio()
	{
	 cadeia atvs
	 caracter cac = 'a'
	 para(inteiro i=0;i < 8;i++){
	   u.aguarde(4000)
	   limpa()
	   escreva("Qual atividade quer testar?(os nomes estão na folha)")
	   leia(atvs)
	para(inteiro cont = 0;cont <= txt.numero_caracteres(atvs)-1; cont ++){
			cac = txt.obter_caracter(atvs, cont)
			se(cac == '1' ou cac == '2' ou cac == '3' ou cac == '4' ou cac == '5' ou cac == '6' ou cac == '7' ou cac == 'i'ou cac == 'a'ou cac == 't'ou cac == 'v'ou cac == '_'){
				
	          
	   escolha(cac){
	   	caso 'i':
	   	inteiro xi = 0
        enquanto(xi < 5){
            escreva(xi,"\n")
            xi = xi + 1

        }
	   	pare
          caso '1':
            inteiro x1 = 1
          enquanto(x1 <= 5){
          	escreva(x1,"\n")
          	x1 = x1 + 1
          }
          
          pare
            caso '2':
            inteiro x2 = 3
          enquanto(x2 >= 0){
          	escreva(x2,"\n")
          	x2 = x2 - 1
          }
          
          pare
           caso '3':
            inteiro x3 = 2
            inteiro y3 = 1
           enquanto(x3 <= 48){
           	escreva(x3," - ")
           	x3=x3*y3
           	y3=y3+1
           }
           pare
           caso '4':
            inteiro x4 = 3
            inteiro y4 = 6561
           enquanto(x4 != y4){
           	escreva("valor: ", y4)
           	y4 = m.raiz(y4,2)
           }
           escreva("valor: ", y4)
           pare
           caso'5':
            inteiro x5=4
            inteiro y5=0
            inteiro i5=0
           enquanto(i5 < x5){
           	i5 = i5 + 1
           	y5 = y5 + i5
           	escreva(i5," - ",y5)
           }
           pare
           caso '6':
            inteiro x6 = 1
            logico continuar = verdadeiro
           enquanto(continuar){
           	escreva(continuar, "\n")
           	escreva(x6,"\n")

            se(x6 == 81){
            	continuar = falso
            }
            x6=x6*3
           }
           pare
           caso '7':
            inteiro x7 = 1
            logico parar = falso

           enquanto(nao parar){
           	escreva(x7, " - ")
           	x7++

           	se(x7 > 3){
           		pare
           	}
           }
           pare
	   }
	   
	      
			}
	}
	 }
	}
}
	  

	
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 2323; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {x1, 31, 20, 2};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */