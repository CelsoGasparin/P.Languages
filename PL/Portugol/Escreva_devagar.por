programa
{
	inclua biblioteca Tipos --> tp
	inclua biblioteca Graficos --> graf
	inclua biblioteca Texto --> txt
	inclua biblioteca Util --> u


	inteiro x_tela = 1920
	inteiro y_tela = 1080



	
	funcao inicio()
	{
		graf.iniciar_modo_grafico(falso)
		graf.definir_dimensoes_janela(x_tela, y_tela)
		escreva_devagar(100,200,"eu to livre da vagaba mas nao vou pra casa escondi uma garrafa ade baixo do",50,25)
		u.aguarde(3000)
	
	}
	funcao escreva_devagar(inteiro x,inteiro y,cadeia texto,inteiro tempo,inteiro limite){
		inteiro letra
		real SizeBase = 0.0296296296296296
		real size = SizeBase * y_tela
		cadeia atual = ""
		inteiro contador = -1
		inteiro pular = 0
		cadeia linhas [100]
		inteiro comeco = 0
		inteiro QuantLinhas
		caracter spec
		inteiro space_check
		para(inteiro k = 0;k< 100;k++){
			linhas[k] = ""
		}
		letra = txt.numero_caracteres(texto)
		para(inteiro i = 0;i < letra+1 ;i++){
			definir(graf.COR_VERDE,size,"Times New Roman")
			se(contador == limite){
				
				linhas[pular] = atual
				pular++
				comeco += txt.numero_caracteres(atual)
				atual = ""
				contador = 0
				
			}
			QuantLinhas = u.numero_elementos(linhas)
			se(pular >=1){
				para(inteiro o = 0;o < QuantLinhas; o++){
				graf.desenhar_texto(x,y+(size*o), linhas[o])
				}
			}
			atual = txt.extrair_subtexto(texto, comeco, i)
			space_check = txt.numero_caracteres(atual)
			se(i >=1){
				spec = txt.obter_caracter(atual, space_check-1)	
			}
			
			graf.desenhar_texto(x, y+(size*pular), atual)
			se(contem(' ',tp.caracter_para_cadeia(spec)) == falso){
				u.aguarde(tempo)	
			}
			graf.renderizar()
			contador++
		}
		
	}

	funcao definir(inteiro cor,real tamanho,cadeia fonte){
		graf.definir_cor(cor)
		graf.definir_tamanho_texto(tamanho)
		graf.definir_fonte_texto(fonte)
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
 * @POSICAO-CURSOR = 1275; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {atual, 27, 9, 5}-{spec, 33, 11, 4}-{space_check, 34, 10, 11};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */