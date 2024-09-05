programa
{
	
	inclua biblioteca Util --> u
	inclua biblioteca Tipos --> tp
	inclua biblioteca Texto --> txt
	inclua biblioteca Matematica --> mt
	caracter albafeto[27] = {' ','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'}
	caracter gran_albafeto[27] = {' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'}
	inteiro albafeto_letras = u.numero_elementos(albafeto)
	funcao inicio()
	{
		escreva(encode("Brazil mentioned",7))
		
	}
	funcao cadeia encode(cadeia palavra, inteiro chave){
		inteiro num_letras = txt.numero_caracteres(palavra)
		inteiro pos_letra
		inteiro contador = 0
		caracter caracas
		cadeia palavra_ceasar = ""
		se(chave >= 26){
			chave = chave%26
		}
		se(chave < 0){
			chave = 0
		}
		para(inteiro i = num_letras;i > 0;i--){
			caracas = txt.obter_caracter(palavra, i-1)
			
			se(caracas != ' ' e caracas != '1'e caracas != '2'e caracas != '3'e caracas != '4'e caracas != '5'e caracas != '6'e caracas != '7'e caracas != '8'e caracas != '9'e caracas != '0'){
				pos_letra = posic(caracas)+chave
				se(pos_letra > 26){
					pos_letra = pos_letra%26
				}
				palavra_ceasar = txt.preencher_a_esquerda(albafeto[pos_letra], contador+1, palavra_ceasar)
				
			}senao{
				palavra_ceasar = txt.preencher_a_esquerda(caracas, contador+1, palavra_ceasar)
				
			}
			contador++
		}
		retorne palavra_ceasar
	}
	funcao cadeia decode(cadeia palavra,inteiro chave){
		inteiro num_letras = txt.numero_caracteres(palavra)
		inteiro pos_letra
		inteiro contador = 0
		caracter caracas
		cadeia palavra_ceasar = ""
		se(chave >= 26){
			chave = chave%26
		}
		se(chave < 0){
			chave = 0
		}
		para(inteiro i = num_letras;i > 0;i--){
			caracas = txt.obter_caracter(palavra, i-1)
			
			se(caracas != ' ' e caracas != '1'e caracas != '2'e caracas != '3'e caracas != '4'e caracas != '5'e caracas != '6'e caracas != '7'e caracas != '8'e caracas != '9'e caracas != '0'){
				pos_letra = posic(caracas)-chave
				se(pos_letra <= 0){
					pos_letra = 26-(chave-(pos_letra+chave))
				}
				
				palavra_ceasar = txt.preencher_a_esquerda(albafeto[pos_letra], contador+1, palavra_ceasar)
				
			}senao{
				palavra_ceasar = txt.preencher_a_esquerda(caracas, contador+1, palavra_ceasar)
				
			}
			contador++
		}
		retorne palavra_ceasar
	}
	
	funcao inteiro posic(caracter car){
		para(inteiro i = 1 ;i<albafeto_letras;i++){
			se(car == albafeto[i] ou car == gran_albafeto[i]){
				retorne i
			}
		}
		retorne 10100100
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 515; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {pos_letra, 18, 10, 9}-{palavra_ceasar, 21, 9, 14};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */