programa
{
	inclua biblioteca Util --> u
	
	funcao inicio()
	{
          cadeia mae = "Tess"
          cadeia filha = "Anna"
          escreva("O nome da mãe é ", mae ," e o da filha é ", filha)
          u.aguarde(1000)
          mae = filha
          filha = "Tess"
          escreva("\nO nome da mãe é ", mae ," e o da filha é ", filha)
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 223; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */