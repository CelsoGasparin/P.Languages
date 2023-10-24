programa
{
	
	funcao inicio()
	{
		inteiro fibas=1, antes=0, repeat = 10
		escreva("quantos valores você quer?")
		leia(repeat)
		se(repeat >= 2){
			escreva("0")
		escreva("\n1")
		para(inteiro i = 1;i <= repeat - 2;i++){
			antes = fibas - antes
			fibas += antes
			escreva("\n", fibas)
		}
		}
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 205; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */