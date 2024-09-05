programa
{
	inclua biblioteca Matematica --> m
	inclua biblioteca Util --> u
	
	funcao inicio()
	{
	       real dindin,ps
            escreva("Quanto dinheiro você tem?(em reais)")
            leia(dindin)
            ps = 1300-(dindin/5)
            escreva("Te falta $", m.arredondar(ps, 2) ," para comprar o PS5.")
            ps = 6499.94-(dindin)
            u.aguarde(1000)
            escreva("\nTe falta R$", m.arredondar(ps, 2) ," para comprar o PS5.")
            u.aguarde(1000)
            se(dindin > 50)
            {
            escreva("\nCom esse dinheiro você poderia comprar ", dindin/50 ," livros do Harry Potter e a Ordem d")
            escreva("a Fênix.")
            }
	       senao
	       {
	       	escreva("\nTu não pode comprar o Harry Potter e a Ordem da Fênix.")

	       }
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 795; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */