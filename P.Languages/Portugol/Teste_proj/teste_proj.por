programa
{
	inclua biblioteca Tipos --> tp
	inclua biblioteca Texto --> txt
	inclua biblioteca Teclado --> tec
	inclua biblioteca Util --> u
	inclua biblioteca Graficos --> graf
	inclua biblioteca Arquivos --> arq
	
	inteiro X = graf.largura_tela()
	inteiro Y = graf.altura_tela()
     
     cadeia ItemStorage_LIST[58]
	inteiro ItemStorage_QUANTITY[58] 
	logico Storage_CarregouItem = falso 

	cadeia BAG_LIST[58]
	inteiro BAG_QUANTITY[58] 
	logico BAG_CarregouItem = falso
	funcao inicio()
	{
		graf.iniciar_modo_grafico(falso)
		graf.definir_dimensoes_janela(0, 0)
	
		graf.renderizar()
		
		ItemStorage_ADD("POTION",10,160)
		ItemStorage_ADD("POKEBALL",1000,16)
		BAG_STORAGE(10,90,0)
		
		escreva(ItemStorage_QUANTITY[10])
		escreva(BAG_QUANTITY[10])
		escreva(ItemStorage_LIST[10])
		escreva(BAG_LIST[10])		
		
	}
	funcao ItemStorage_ADD(cadeia item,inteiro place,inteiro QuantItem){
		inteiro certeza = 0
		se(Storage_CarregouItem == falso){
			para(inteiro p = 0;p < 58;p++){
				ItemStorage_QUANTITY[p] = 0
			}
			para(inteiro o = 0;o < 58;o++){
				ItemStorage_LIST[o] = ""
			}	
			Storage_CarregouItem = verdadeiro
		}
		se(place >= 0 e place <= 57){
			ItemStorage_QUANTITY[place] = QuantItem
			ItemStorage_LIST[place] = item	 
		}
		senao{
			para(inteiro c = 0;c < 58;c++){
				se(ItemStorage_QUANTITY[c] == 0){
					 ItemStorage_QUANTITY[c] = QuantItem
					 certeza++
				}
				se(ItemStorage_LIST[c] == ""){
					 ItemStorage_LIST[c] = item
					 certeza++
				}
				se(certeza == 2){
					escreva("\n\n"+item+" Número na lista = "+c+"\n\n")
					c = 9502
				}			
			}
		}
		para(inteiro h = 0;h<58;h++){
			se(ItemStorage_QUANTITY[h] <= 0){
			ItemStorage_LIST[h] = ""
			ItemStorage_QUANTITY[h] = 0
			}	
		}
	}
	funcao BAG_ADD(cadeia item,inteiro place,inteiro QuantItem){
		inteiro certeza = 0
		se(BAG_CarregouItem == falso){
			para(inteiro p = 0;p < 58;p++){
				BAG_QUANTITY[p] = 0
			}
			para(inteiro o = 0;o < 58;o++){
				BAG_LIST[o] = ""
			}	
			BAG_CarregouItem = verdadeiro
		}
		se(place >= 0 e place <= 57){
			BAG_QUANTITY[place] = QuantItem
			BAG_LIST[place] = item	 
		}
		senao{
			para(inteiro c = 0;c < 58;c++){
				se(ItemStorage_QUANTITY[c] == 0){
					 BAG_QUANTITY[c] = QuantItem
					 certeza++
				}
				se(ItemStorage_LIST[c] == ""){
					 BAG_LIST[c] = item
					 certeza++
				}
				se(certeza == 2){
					escreva("\n\n"+item+" Número na lista = "+c+"\n\n")
					c = 9502
				}			
			}
		}
		para(inteiro h = 0;h<58;h++){
			se(BAG_QUANTITY[h] <= 0){
			BAG_LIST[h] = ""
			BAG_QUANTITY[h] = 0
			}	
		}
		
	}
	funcao BAG_STORAGE(inteiro loc,inteiro quant,inteiro bot){
		se(bot == 0){
			se(quant <= ItemStorage_QUANTITY[loc]){
				 ItemStorage_ADD(ItemStorage_LIST[loc],loc,ItemStorage_QUANTITY[loc] - quant)
				 BAG_ADD(ItemStorage_LIST[loc],loc,quant)
			}
			senao{
				escreva("\n\nERRO, VOCÊ TENTOU RETIRAR UMA QUANTIDADE MAIOR DO QUE VOCÊ PODIA\n\n")
			}
		}
		se(bot ==1){
			se(quant <= BAG_QUANTITY[loc]){
				 BAG_ADD(ItemStorage_LIST[loc],loc,ItemStorage_QUANTITY[loc] - quant)
				 ItemStorage_ADD(ItemStorage_LIST[loc],loc,quant)
			}
			senao{
				escreva("\n\nERRO, VOCÊ TENTOU RETIRAR UMA QUANTIDADE MAIOR DO QUE VOCÊ PODIA\n\n")
			}
		}

		
	}




		
	}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 3220; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */