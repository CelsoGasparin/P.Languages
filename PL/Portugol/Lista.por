programa
{
	inclua biblioteca Tipos --> tp
	inclua biblioteca Teclado --> tec
	inclua biblioteca Util --> u
	inclua biblioteca Arquivos --> arq
	cadeia escolher = "1"
	cadeia texto
	inteiro arthurmurraydesgracado = 0  // tem que ter esssas duas váriaveis para funcionar a funcao
	inteiro check = -9502 //tem que ter esssas duas váriaveis para funcionar a funcao
	funcao inicio(){
		mudar_modo("arq21",2)// antes de utilizar essa funcao vocẽ tem que iniciar ela para evitar erros
		enquanto(verdadeiro){
			escreva("1-escrever\n2-DeletarLinhas\n3-ListarTodas\n")
			leia(escolher)
			se(escolher != "1" e escolher != "2" e escolher != "3"){
				escreva("\n\n\n\n\n\nERRO\n\n\n\n\n\n")
			}
			senao se(escolher == "1"){
				escreva("\n\nEscreva oque você vai adicionar ao arquivo!AVISO:TODAS AS VEZES QUE VOCÊ COLOCAR ALGO AQUI VOCÊ VAI PULAR UMA LINHA, ENTÃO TOME CUIDADO!") 
			}



			
		}
		
	}

	funcao inteiro mudar_modo(cadeia Carq, inteiro Cmodo){
		
		
		


		se(arthurmurraydesgracado == 0){
			check = 0
		}
		
		se(arq.arquivo_existe(Carq) == verdadeiro e check == 1){
			se(Cmodo == 2 e check == 1){
				arq.fechar_arquivo(arthurmurraydesgracado)
				arthurmurraydesgracado = arq.abrir_arquivo(Carq,arq.MODO_ACRESCENTAR)
				retorne arthurmurraydesgracado
			}
			se(Cmodo == 1 e check == 1){
				arq.fechar_arquivo(arthurmurraydesgracado)
				arthurmurraydesgracado = arq.abrir_arquivo(Carq,arq.MODO_ESCRITA)
				retorne arthurmurraydesgracado
			}
			se(Cmodo == 0 e check == 1){
				arq.fechar_arquivo(arthurmurraydesgracado)
				arthurmurraydesgracado = arq.abrir_arquivo(Carq,arq.MODO_LEITURA)
				retorne arthurmurraydesgracado
			}		


			retorne 9502
			
		}
		
		se(check == 0){
			arthurmurraydesgracado = arq.abrir_arquivo(Carq,arq.MODO_ACRESCENTAR)
			check = 1
			retorne arthurmurraydesgracado
		}

		retorne 9502

		
	}





	
}




/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 180; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */