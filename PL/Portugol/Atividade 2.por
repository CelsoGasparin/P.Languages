programa
{
	inclua biblioteca Util --> u
	
	funcao inicio()
	{
	real nota1,nota2,nota3,nota4,media
		escreva("Me informe 4 números\n")
		leia(nota1,nota2,nota3,nota4)
		media = (nota1+nota2+nota3+nota4)/4
		u.aguarde(1000)
		escreva("\nA média desses números é: ", media)
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 134; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */