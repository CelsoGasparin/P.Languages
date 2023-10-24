programa
{
	inclua biblioteca Tipos --> tp
	inclua biblioteca Graficos --> graf
	inclua biblioteca Texto --> txt
	inclua biblioteca Util --> u
	inclua biblioteca Teclado --> tec
	caracter leitada = 'o'
	cadeia sex = leitada
 	funcao inicio()
	{
		escreva(contem('e',))
		t
	}

	funcao logico contem(caracter car,cadeia texto){
		inteiro caract = txt.numero_caracteres(texto)
		inteiro checkada = 0
		para(inteiro i = 0;i<caract;i++){
			se(txt.obter_caracter(texto, i) == car){
				retorne verdadeiro
			}

		
			
		}
		retorne falso




		
	}

	
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 272; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */