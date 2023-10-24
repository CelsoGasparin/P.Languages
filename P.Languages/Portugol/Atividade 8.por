programa
{
	inclua biblioteca Matematica --> m
	inclua biblioteca Util --> u
	
	funcao inicio()
	{
		real PesoPeixes,multa,excesso
		escreva("Quantos quilos de peixe você conseguiu?")
		leia(PesoPeixes)
		excesso = PesoPeixes-50
		multa = 4.50*excesso
		u.aguarde(1000)
		se(PesoPeixes > 50)
		{
			escreva("A multa que você deve pagar será de R$", multa ,"0 pois pescou ", excesso ," quilos acima do permitido")
		}
		senao
		{
			escreva("Tá tudo certo meu parceiro")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 470; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */