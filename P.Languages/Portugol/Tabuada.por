programa
{
	inclua biblioteca Util--> u
	
	funcao inicio()
	{
		inteiro contador,num
		contador = 1
		escreva("Informe um número")
		leia(num)
		escreva("A tabuada desse número é:")
		enquanto(contador <=10)
		{
			escreva(num ," X ", contador ," = ", num*contador ,"\n")
			contador = contador + 1
			u.aguarde(500)
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 249; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */