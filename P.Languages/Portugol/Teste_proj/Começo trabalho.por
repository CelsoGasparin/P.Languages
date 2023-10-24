programa
{
	inclua biblioteca Tipos --> tp
	inclua biblioteca Texto --> txt
	inclua biblioteca Teclado --> tec
	inclua biblioteca Util --> u
	inclua biblioteca Graficos --> graf

	cadeia palavra = ""
     cadeia situa = "start"
	cadeia nome_player
	cadeia nome_rival
	cadeia preencher = ""



     
	inteiro pika = graf.carregar_imagem("images/Pikamon.png")
	inteiro joinha = graf.carregar_imagem("images/joinha.png")
	inteiro FireRed = graf.carregar_imagem("images/FireRed.png")
	inteiro Chariz = graf.carregar_imagem("images/Chariz.png")
	inteiro OAK = graf.carregar_imagem("images/OAK.png")
	inteiro gary = graf.carregar_imagem("images/GARY.PNG")
     inteiro ESTANTE = graf.carregar_imagem("images/ESTANTE.png")
	inteiro BAG = graf.carregar_imagem("images/BAG.png")
	inteiro NES = graf.carregar_imagem("images/NES.png") 
	inteiro PC = graf.carregar_imagem("images/PC.png")
	inteiro PlayerImage
	inteiro y_tela = 1080
	inteiro x_tela = 1920
	inteiro gend




	cadeia ItemStorage_LIST[58]
	inteiro ItemStorage_QUANTITY[58] 
	logico CarregouItem = falso
	inteiro tela_ItemStorage = 1

	cadeia BAG_LIST[58]
	inteiro BAG_QUANTITY[58] 
	logico BAG_CarregouItem = falso
	inteiro tela_BAG = 1
	
	funcao inicio()
	{	
		ItemStorage_ADD("",0,0)
		BAG_ADD("",0,0)	
		graf.iniciar_modo_grafico(falso)
	     graf.definir_dimensoes_janela(x_tela, y_tela)
		graf.definir_cor(graf.COR_PRETO)
		load(10,50,6)
		logo()
		u.aguarde(3000)
		opcoes("Isso aqui é só um teste pra ler variável")
		graf.renderizar()		
		escrever()		
	}
	funcao load(inteiro letras,inteiro time,inteiro repeat){
		inteiro ltt = 0
		para(inteiro k = 1; k<=repeat;k++){
			para(inteiro j = 1;j<=letras;j++){
			graf.limpar()
			graf.definir_cor(graf.COR_VERDE)
			graf.definir_tamanho_texto(100)
			//A distância de cada letra é a metade do tamanho da letra
			graf.definir_fonte_texto("Times New Roman")
			para(inteiro i = 1 ;i <=letras; i++){
				se( i == j){ 				
					graf.desenhar_texto(650+(50*i), 450, "1")								
				}
				senao{
					graf.desenhar_texto(650+(50*i), 450, "0")
				}
			}			
			graf.renderizar()
			u.aguarde(time)
			}
		}
	}
     funcao logo(){
		graf.limpar()
		logo_prat()
		graf.renderizar()
     }
	funcao opcoes(cadeia aviso){
		logo_prat()
		graf.desenhar_retangulo(670,700 , 600, 100, verdadeiro, falso)
		graf.definir_tamanho_texto(25)
		graf.desenhar_texto(670, 677, aviso)
	}
	funcao atualizador(inteiro tecla){
		inteiro caracteres = txt.numero_caracteres(palavra)
		se(tecla == tec.TECLA_BACKSPACE){
			se(caracteres >=1){
				palavra = txt.extrair_subtexto(palavra, 0, caracteres - 1)
			}	
		}
		senao{
			palavra = palavra + tec.caracter_tecla(tecla)
		}
	}
	inteiro tecla
	funcao escrever(){
		inteiro caracteres = txt.numero_caracteres(palavra)
		palavra =""
		enquanto(verdadeiro){
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				se(palavra =="TESTE"){
					
					palavra = ""
					opcoes("Área de testes")
					graf.renderizar()
					situac("leavetest")
				}
			}
		



			
			se(situa == "start"){
				opcoes("Isso aqui é só um teste pra ler variável")
			}
			se(tecla == tec.TECLA_ENTER){
				se(caracteres == 0){
					opcoes("Isso aqui é só um teste pra ler variável")
					graf.desenhar_texto(900, 808, "ERRO.")
					graf.renderizar()
					//criar função para avisar de preencher
				}
				se(situa != "leavetest"){
					se(palavra == "SAIR"){
					pare
				}
				}

				

				se(situa == "leavetest"){
						se(palavra == "SAIR"){
							 back()
						}
				     	
					}
				se(situa == "leavetest"){
					se(palavra == "BATTLE"){
						situac("BATTLE")
						briga(30,30)
					}
				}

				se(situa == "leavetest"){
					se(palavra == "START"){
						situac("CMC")
						comeco()
						
					}
				}
				se(situa == "leavetest"){ 
					se(palavra == "CASA"){
						nome_player = "Jefferson"
						nome_rival = "Khalil"
						gend = 1
						PlayerImage = graf.carregar_imagem("images/gend"+gend+".png")
						situa = "CASA+QUARTO+"
						casa_player()
					}
				}
				se(situa =="leavetest" e palavra == "ITEM"){
					screen_ItemStorage(1)	
				}
				se(situa =="leavetest" e palavra == "ITEMST"){
					ItemStorage()	
				}				
			}
			se((tecla >= tec.TECLA_A e tecla <= tec.TECLA_Z) ou (tecla >= tec.TECLA_0 e tecla <= tec.TECLA_9) ou tecla == tec.TECLA_BACKSPACE ou tecla == tec.TECLA_ESPACO){
				
				se(situa =="start"){
               		atualizador(tecla)
					opcoes("Isso aqui é só um teste pra ler variável")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(675,733,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
               	}
               	se(situa =="leavetest" ){
               		atualizador(tecla)
					opcoes("Área de testes")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(675,733,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
               	}
				
			     
			}


			
		}
	}
     funcao logo_prat(){
     	graf.definir_cor(graf.COR_BRANCO)
		graf.definir_fonte_texto("Times New Roman")
		graf.definir_tamanho_texto(50)
		graf.desenhar_texto(780,60,"▄█ ██▄   █  █▀ ")
		graf.desenhar_texto(780,120,"██ █  █  █▄█   ")
		graf.desenhar_texto(780,180,"██ █   █ █▀▄   ")
		graf.desenhar_texto(780,240,"▐█ █  █  █  █  ")
		graf.definir_tamanho_texto(34)
		graf.desenhar_texto(818,298,"     ███▀       ")
		graf.definir_tamanho_texto(50)
		graf.desenhar_texto(802,300," ▐ ")
     }
     funcao situac(cadeia info){
     	situa = info
     }
     funcao back(){
     	situac("start")
     	palavra = ""

     	
     	escrever()
     }
     funcao briga(inteiro hp1, inteiro hp2){
		palavra =""
	   
     	enquanto(hp1>0 e hp2>0){
     		gLeia(620,895)
			se(tecla == tec.TECLA_ENTER){
				se(situa =="BATTLE_SCREEN" ou situa =="BAG_SCREEN" ){
					se(palavra == "SAIR"){
						palavra = ""
						situac("BATTLE")									
					}
				}
				se(palavra == "BATTLE"){
					situac("BATTLE_SCREEN")
			     }

				se(palavra == "BAG"){
					situac("BAG_SCREEN")
				}				
			}
     	}
     	
     	
     	
     	
     	

     }
	funcao gLeia(inteiro x,inteiro y){
		inteiro caracteres = txt.numero_caracteres(palavra)
		tecla = tec.ler_tecla()
		se((tecla >= tec.TECLA_A e tecla <= tec.TECLA_Z) ou (tecla >= tec.TECLA_0 e tecla <= tec.TECLA_9) ou tecla == tec.TECLA_BACKSPACE ou tecla == tec.TECLA_ESPACO){
					
				se(situa =="start"){
               		atualizador(tecla)
					opcoes("Isso aqui é só um teste pra ler variável")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(x,y,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
               	}








				
               	se(situa =="leavetest" ){
               		atualizador(tecla)
					opcoes("Área de testes")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(x,y,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
               	}
				se(situa =="BATTLE"){
					atualizador(tecla)
					screen_briga("BATTLE","BAG","POKéMON","RUN")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(x,y,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
				}
				se(situa =="BATTLE_SCREEN"){
					atualizador(tecla)
					screen_briga("HAB1","HAB2","HAB3","HAB4")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(x,y,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
				}
				se(situa =="BAG_SCREEN"){
					atualizador(tecla)
					screen_briga("ITEM1","ITEM2","ITEM3","ITEM4")
					graf.definir_tamanho_texto(45)
					graf.desenhar_texto(x,y,palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)
				}
				se(situa == "CMC"){
					atualizador(tecla)
                   	 	screen_comeco()
                    	graf.definir_tamanho_texto(70)
                    	graf.desenhar_texto(x,y,palavra)
                    	graf.renderizar()
                    	caracteres = txt.numero_caracteres(palavra)

				}

				se(situa == "PROF"){
					atualizador(tecla)
					screen_player()
					
					graf.desenhar_texto(x, y, palavra)
					graf.renderizar()
					caracteres = txt.numero_caracteres(palavra)	
				}
				se(situa == "ITEM-->BAG" ou situa == "BAG-->ITEM"){
					atualizador(tecla)
					se(situa == "ITEM-->BAG"){
						screen_ItemStorage(tela_ItemStorage)	
					}
                   	 	
                    	definir(graf.COR_VERDE,100,"Times New Roman")
                    	graf.desenhar_texto(x,y,palavra)
                    	graf.renderizar()
                    	caracteres = txt.numero_caracteres(palavra)

				}

				
			     
			}
	
	
	






			

	}
	funcao screen_briga(cadeia word1,cadeia word2,cadeia word3,cadeia word4){
		graf.definir_cor(graf.COR_BRANCO)
		graf.definir_fonte_texto("Times New Roman")
		graf.definir_tamanho_texto(50)
		graf.desenhar_texto(20,35, word1 +"                       "+ word2 +"                                             "+word3+"                                        "+word4)
		graf.desenhar_texto(0, 75, "---------------------------------------------------------------------------------------------------------------------------")
		graf.desenhar_texto(0, 800, "---------------------------------------------------------------------------------------------------------------------------")
		graf.desenhar_retangulo(620,865 , 600, 100, verdadeiro, falso)
	}
	funcao screen_comeco(){
		graf.definir_cor(graf.COR_VERDE)
		graf.desenhar_imagem(190 , 50, pika )
		graf.desenhar_imagem(390, 330, FireRed)
		graf.desenhar_imagem(1140, 75, Chariz)
		graf.definir_tamanho_texto(45)
		graf.desenhar_texto(330,745,"OI")
		graf.desenhar_imagem(350,650,joinha )
		graf.desenhar_retangulo(750, 800, 750, 150, verdadeiro, falso)
		
	
	}
	funcao comeco(){
		screen_comeco()
		graf.renderizar()
		palavra = ""
		enquanto(situa == "CMC"){
			
			gLeia(755,850)



			se(palavra == "FODASE"){
				situac("PROF") 
				prof(1)
				
			}
			 

			
		}
		
		


		
	}
	funcao prof(inteiro moment){
		
		se(moment == 1){
			
			escrevaLentin(0,4,">Olá!Que bom te ver aqui!",50,100)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 2
			}
			senao{
				prof(1)
			}
		}
		se(moment == 2){
			escrevaLentin(0,4,">Bem vindo ao mundo Pokemon!",50,100)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 3
			}
			senao{
			prof(2)	
			}
			
		}
		se(moment == 3){
			escrevaLentin(0,4,">Meu nome é professor OAK(tradução para CARVALHO).",50,100)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 4
			}
			senao{
			prof(3)	
			}
			
		}
		se(moment == 4){
			escrevaLentin(0,4,">Mas normalmente me chamam de professor pokemon.",50,100)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 5
			}
			senao{
			prof(4)	
			}
			
		}
		se(moment == 5){
			escrevaLentin(0,4,">Esse mundo é habitado por criaturas chamadas de POKEMON.",50,100)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 6
			}
			senao{
			prof(5)	
			}
			
		}
		se(moment == 6){
			escrevaLentin(0,4,">Para algumas pessoas, pokemon são tipo pets, outros usam para fazer rinha de animais só que legalizado.",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 7
			}
			senao{
			prof(6)	
			}
			
		}


		se(moment == 7){
			escrevaLentin(0,4,">Agora sobre mim...",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 8
			}
			senao{
			prof(7)	
			}
			
		}

		se(moment == 8){
			escrevaLentin(0,4,">Eu estudo essas criaturas.",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 9
			}
			senao{
			prof(8)	
			}
			
		}

		se(moment == 9){
			escrevaLentin(0,4,">Mas primeiro quem é tu?",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 10
			}
			senao{
			prof(9)	
			}
			
		}

		se(moment == 10){
			escrevaLentin(0,4,">Primeiro.Você é um menino ou menina?",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 11
			}
			senao{
			prof(10)	
			}
			
		}

		se(moment == 11){
			escrevaLentin(0,4,">BOY-1   >GIRL-2",50,9)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_1){
				gend = 1
				moment = 12
			}
			se(tecla == tec.TECLA_2){
				gend = 2
				moment = 12
			}
			se(tecla != tec.TECLA_2 e tecla != tec.TECLA_1){
			prof(11)	
			}
			
			
		}
		se(moment == 12){
			PlayerImage = graf.carregar_imagem("images/gend"+gend+".png")
			escrevaLentin(0,4,">Qual teu nome?",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 13
			}
			senao{
			prof(12)	
			}
			
		}
		se(moment == 13){
		palavra = ""		
		graf.desenhar_imagem(600, 300, PlayerImage)
		graf.renderizar()		
			enquanto(moment == 13){
				gLeia(200,200)
				se(txt.numero_caracteres(palavra) > 1){
					se(tecla == tec.TECLA_ENTER){
						nome_player = palavra
						palavra = ""
						moment = 14
					}	
				}
			}
			
			

			
		}
		se(moment == 14){
			situac("PROF+NETO+")
			escrevaLentin(0,4,">Esse é meu neto.",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 15
			}
			senao{
			prof(14)	
			}
			
		}
		se(moment == 15){
			escrevaLentin(0,4,">Ele enche teu saco desde quando tu se lembra como gente.",50,150)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 16
			}
			senao{
			prof(15)	
			}
			
		}
		se(moment == 16){
			escrevaLentin(0,4,">Qual era o nome dele mesmo?",50,115)
			u.aguarde(3000)
			escrevaLentin(0,4,">1Verde       >2Gary        >3João Antonio>4Khalil",50,14)
			tecla = tec.ler_tecla()
			se(tecla >= tec.TECLA_1 e tecla <= tec.TECLA_4){
				se(tecla == tec.TECLA_1){
					nome_rival = "Verde"
				}
				senao se(tecla == tec.TECLA_2){
					nome_rival = "Gary"
				}
				senao se(tecla == tec.TECLA_3){
					nome_rival = "João Antonio"
				}
				senao se(tecla == tec.TECLA_4){
					nome_rival = "Khalil"
				}
				moment = 17
			}
			senao{
			prof(16)	
			}
			
		}
		se(moment == 17){
			escrevaLentin(0,4,">Sempre soube!O nome dele é "+nome_rival+"!",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 18
			}
			senao{
			prof(17)	
			}
			
		}
		se(moment == 18){
			situac("PROF+PLAYER+")
			escrevaLentin(0,4,">"+nome_player+"!",50,115)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 19
			}
			senao{
			prof(18)	
			}
			
		}
		se(moment == 19){
			escrevaLentin(0,4,">Sua própria jornada no meio da selva depois de ser despejado da casa da sua mãe mesmo tendo no máximo uns 10 anos acaba de começar!",50,150)
			tecla = tec.ler_tecla()
			se(tecla == tec.TECLA_ENTER){
				moment = 20
			}
			senao{
			prof(19)	
			}
		}
		se(moment == 20){
			situac("CASA+QUARTO+")
			casa_player()
		}
	
		
		

	}
	funcao  casa_player(){
		inteiro tempo_CASA = 50
		inteiro tempo_NES = 0 
		enquanto(situa == "CASA+QUARTO+" ou situa == "CASA+QUARTO+-ESTANTE-" ou situa == "CASA+QUARTO+-CONSOLE-" ou situa == "CASA+QUARTO+-COMPUTADOR-"){
			situa = "CASA+QUARTO+"
			tecla = 0
			escrevaLentin(0,4,">Você acorda em seu quarto.Em volta de você estão todas as suas coisas.O que você quer fazer agora?1-Chequar a estante de livros"+txt.preencher_a_esquerda(' ',70,preencher)+"2-Jogar em seu console"+txt.preencher_a_esquerda(' ',77,preencher)+"3-Ligar o computador"+txt.preencher_a_esquerda(' ',79,preencher)+"4-SAIR",tempo_CASA,99)
			se(tempo_CASA == 50){
				tempo_CASA = 0				
			}
			enquanto(tecla < tec.TECLA_1 ou tecla > tec.TECLA_4){
				tecla = tec.ler_tecla()
			}
			se(tecla == tec.TECLA_1){
				situa = "CASA+QUARTO+-ESTANTE-"
				escrevaLentin(0,4,">Está cheia de livros sobre pokemon.",50,150)
				u.aguarde(1500)
			}
			se(tecla == tec.TECLA_2){
				situa = "CASA+QUARTO+-CONSOLE-"
				se(tempo_NES == 0){
					escrevaLentin(0,4,">Você joga em seu NES(NINTENDO ENTERTAINMENT SYSTEM)>Okay!Você já jogou demais!",50,52)
					tempo_NES = 1
					u.aguarde(1500)	 
				}
				senao{
					escrevaLentin(0,4,">Okay!Você já jogou demais!",50,100)
					u.aguarde(1500)
				}
	

				
				
			}
			
		}
		





		
	}
	funcao screen_player(){
		graf.desenhar_imagem(600, 300, PlayerImage)
	}
		
	funcao escrevaLentin(inteiro x,inteiro y,cadeia texto,inteiro tempo,inteiro limite){
        inteiro letra
        real SizeBase = 0.0296296296296296
        real size = SizeBase * y_tela
        cadeia atual = ""
        inteiro contador = -1
        inteiro pular = 0
        cadeia linhas [100]
        inteiro comeco = 0
        inteiro QuantLinhas
        inteiro space_check
        caracter spec = ' '
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
		  se(situa == "PROF"){
		  	graf.desenhar_imagem(600, 300, OAK)
		  }
		  se(situa == "PROF+NETO+"){
		  	graf.desenhar_imagem(600, 300, gary)
		  }
		  se(situa == "PROF+PLAYER+"){
		  	graf.desenhar_imagem(600, 300, PlayerImage)
		  }
		  se(situa == "CASA+QUARTO+-ESTANTE-"){
		  	graf.desenhar_imagem(600,300, ESTANTE)
		  }
		  se(situa == "CASA+QUARTO+-CONSOLE-"){
		  	graf.desenhar_imagem(600,200, NES)
		  }
		  se(situa == "CASA+QUARTO+-COMPUTADOR-"){
		  	graf.desenhar_imagem(300,300, PC)
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
	funcao ItemStorage_ADD(cadeia item,inteiro place,inteiro QuantItem){
		inteiro certeza = 0
		se(CarregouItem == falso){
			para(inteiro p = 0;p < 58;p++){
				ItemStorage_QUANTITY[p] = 0
			}
			para(inteiro o = 0;o < 58;o++){
				ItemStorage_LIST[o] = "VAZIO"
			}	
			CarregouItem = verdadeiro
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
				se(ItemStorage_LIST[c] == "VAZIO"){
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
			ItemStorage_LIST[h] = "VAZIO"
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
				BAG_LIST[o] = "VAZIO"
			}	
			BAG_CarregouItem = verdadeiro
		}
		se(place >= 0 e place <= 57){
			BAG_QUANTITY[place] = QuantItem
			BAG_LIST[place] = item	 
		}
		senao{
			para(inteiro c = 0;c < 58;c++){
				se(BAG_QUANTITY[c] == 0){
					 BAG_QUANTITY[c] = QuantItem
					 certeza++
				}
				se(BAG_LIST[c] == "VAZIO"){
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
			BAG_LIST[h] = "VAZIO"
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
	funcao screen_ItemStorage(inteiro screen){
		inteiro contador = 0
		
		definir(graf.COR_VERDE,35,"Times New Roman")
		para(inteiro k = 0+(29*(tela_ItemStorage-1)) ;k <29*tela_ItemStorage;k++){
			graf.desenhar_texto(0,70+(32*contador), k+"-"+ItemStorage_LIST[k]+"-"+ItemStorage_QUANTITY[k])
			contador++		
		}
		graf.definir_tamanho_texto(100)
		graf.desenhar_texto(900, 0, "ItemStorage_PC")
		graf.desenhar_retangulo(880, 500, 650, 180, verdadeiro, falso)

	}
	funcao ItemStorage(){
		logico ItemTaking = verdadeiro
		tela_ItemStorage = 1
		situa = "ITEM-->BAG"
		enquanto(ItemTaking == verdadeiro){
			gLeia(890,560)
			se(tecla == tec.TECLA_ENTER){
				se(palavra == "SAIR"){
					ItemTaking = falso
				}
				se(palavra == "UM"){
					tela_ItemStorage = 1
				}
				se(palavra == "DOIS"){
					tela_ItemStorage = 2
				}
				para(inteiro i = 0+(29*(tela_ItemStorage-1)) ;i <29*tela_ItemStorage;i++){
					se(palavra == tp.inteiro_para_cadeia(i,2)){
						
					}
				}				
			}
		}
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 21955; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {ItemStorage_LIST, 36, 8, 16};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */