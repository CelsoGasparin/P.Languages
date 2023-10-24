programa
{
	
	funcao inicio()
	{
		inteiro paisA = 80000
		inteiro paisB = 200000
		para(inteiro i=0; i<=63; i++){
			escreva("\n", i ,"-A-", paisA)
			escreva("\n", i ,"-B-", paisB)
			paisA += (paisA*0.03)
			paisB += (paisB*0.015)
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 187; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {paisA, 6, 10, 5}-{paisB, 7, 10, 5};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */