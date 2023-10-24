programa
{
	inclua biblioteca Util --> u
	inclua biblioteca Matematica -->mat
	
	funcao inicio()
	{
	     inteiro Anos
	     real Bambos
		escreva("a)Em um ano temos ", 24*365," horas.")
		
		escreva("\nb)Em uma década temos ", ((60*24)*365)*10," minutos")
		escreva("\nc)Quantos anos você tem?")
		leia(Anos)
		escreva("Você viveu ", (((Anos*365)*24)*60)*60," segundos.")
		u.aguarde(3000)
		escreva("\nd)Eu pretendo comer ", (-5*12)*80," chocolates em toda minha vida.")
		u.aguarde(3000)
		Bambos =  ((((977000000.0/365.0)/24.0)/60.0)/60.0)
		escreva("\ne)Se minha idade é de 977 milhôes de segundos, eu teria ", mat.arredondar(Bambos, 2)," anos.")
		u.aguarde(3000)

		atividade2()
	}
	funcao atividade2(){
		logico perae = falso
		inteiro ambos
		cadeia planeta
		limpa()
		escreva("a)Se a minha idade é 977 milhões de segundos, eu teria ", mat.arredondar(30.98/0.2408467,2) ," anos em Mercúrio.")
		u.aguarde(5000)
		enquanto(perae == falso){
		limpa()
		escreva("\nb)Quantos anos tu tem?")
		leia(ambos)
		escreva("Qual planeta você gostaria de viver?(não esquece do acento)")
		leia(planeta)
		se(planeta == "terra" ou planeta =="Terra"){
			escreva("Nesse planeta você teria ", ambos/1 ," anos.")
			perae = verdadeiro
		}
		se(planeta == "mercúrio" ou planeta =="Mercúrio" ){
			escreva("Nesse planeta você teria ", mat.arredondar(ambos/0.2408467  , 2) ," anos.")
			perae = verdadeiro
			
		}
		senao se(planeta == "vênus" ou planeta =="Vênus"){
			escreva("Nesse planeta você teria ",mat.arredondar(ambos/0.61519726  , 2)  ," anos.")
			perae = verdadeiro
			
		}
		senao se(planeta == "Marte" ou planeta =="marte"){
			escreva("Nesse planeta você teria ",mat.arredondar(ambos/ 1.8808158, 2)  ," anos.")
			perae = verdadeiro
			
		}
		senao se(planeta == "Júpiter" ou planeta =="júpiter"){
			escreva("Nesse planeta você teria ", mat.arredondar(ambos/11.862615, 2) ," anos.")
			perae = verdadeiro
			
		}
		senao se(planeta == "Urano" ou planeta =="urano"){
			escreva("Nesse planeta você teria ", mat.arredondar(ambos/84.016846, 2) ," anos.")
			perae = verdadeiro
			
		}
		senao se(planeta == "Netuno" ou planeta =="netuno"){
			escreva("Nesse planeta você teria ", mat.arredondar(ambos/164.79132, 2) ," anos.")
			perae = verdadeiro
			
		}
		
		}
		u.aguarde(3000)
		atividade3()
	}
	funcao atividade3(){
		limpa()
		//que tempo bom em
		escreva("Esse estudante teria que ter ", 100/6 ," minutos para cada matéria e ", (100/6)%6 ," minutos para denscanso.")
		u.aguarde(6000)
		atividade4()
	}
	funcao atividade4(){
		logico valor = falso
		enquanto(valor != verdadeiro){
		inteiro tabua
		limpa()
		escreva("Uésley precisa cortar vários pedaços de madeira de 45 cm, ele deveria escolher as tábuas de 3, 4 ou 5 metros?")
          leia(tabua)
          se(tabua == 3){
          	escreva("Com esse tamanho de tábua, ele poderia conseguir ", 300/45 ," pedaços de 45 cm e ainda sobraria ", 300%45 ," cms.")
          	valor = verdadeiro
          	
          }
            senao se (tabua == 4){
          	escreva("Com esse tamanho de tábua, ele poderia conseguir ", 400/45 ," pedaços de 45 cm e ainda sobraria ", 400%45 ," cms.")
          	valor = verdadeiro
          	
          }
            senao se (tabua == 5){
          	escreva("Com esse tamanho de tábua, ele poderia conseguir ", 500/45 ," pedaços de 45 cm e ainda sobraria ", 500%45 ," cms.")
          	valor = verdadeiro
          	
          }
          
		}
		u.aguarde(5000)
		atividade5()
	}
	funcao atividade5(){
		limpa()
		real L1,L2
		escreva("a)A quantidade mínima de fio a ser comprada é de aproximadamente ", mat.arredondar(mat.raiz(171.94, 2), 2) ," metros.")
		escreva("\nb)Me informe dois valores(lado1 e lado2).")
		leia(L1,L2)
          escreva("A quantidade mínima de fio a ser comprada de acordo com as suas medidas é de aproximadamente ", mat.arredondar(mat.raiz(mat.potencia(L1, 2)+mat.potencia(L2, 2), 2), 2) ," metros.")
          u.aguarde(5000)
          atividade6()
	}
	funcao atividade6(){
		limpa()
		escreva("Essa pessoa em um ano teria lido por ", mat.arredondar((0.05*24)*(365-52.143),2) ," horas.")
		u.aguarde(5000)
		atividade7()
	}
	funcao atividade7(){
		inteiro id,idade,soma =0
		limpa()
		escreva("Quantos anos você tem?")
		leia(id)
		idade = id
		
		para(inteiro cont = 0;cont <=id; cont++){
		 soma = soma + idade	
		 idade = idade-1
		}
		escreva("A soma de todas as idades que você já teve seria: ", soma ,".")
		u.aguarde(5000)
		limpa()
		atividade8()
	}
	funcao atividade8(){
		inteiro MB,Mbps
		escreva("Me informe o tamanho do arquivo e a sua velocidade de internet(o arquivo é em MB e a velocidade é Mbps.")
		leia(MB,Mbps)
		MB = MB*8
		escreva("\nO temp que você levaria para baixar esse arquivo seria de ", mat.arredondar((MB/Mbps)/60.0,2) ," minutos ou ", (MB/Mbps) ," segundos.")
		u.aguarde(4000)
		atividade9()
	}
	funcao atividade9(){
		
	}
	
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 4850; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = {id, 128, 10, 2}-{idade, 128, 13, 5}-{soma, 128, 19, 4};
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */