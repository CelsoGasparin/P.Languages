programa
{
	
	funcao inicio()
	{
	     inteiro nada [2]
		escreva("Olá Mundo")
		leia(nada[0],nada[1])
		potencia(nada[0],nada[1])
	}
	funcao potencia(inteiro base,inteiro expo){
		inteiro valor
		valor = base
		para(inteiro j= 2;j <= expo;j++){
			base *= valor
		}
		
		escreva("\nO valor dessa potência é ",base)
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 236; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {base, 11, 25, 4}-{valor, 12, 10, 5};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */