<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Card</title>
</head>
<body>
    
    <div class="container-fluid bg-dark">

        <div class="row justify-content-center mt-5">

            <div class="card col-6" style="border-radius: 50px;">
                <div class="card-body">

                    <form action="card.php" method="POST">
                
                    <div class="row col-12 d-flex justify-content-center align-items-center">

                        <label for="title"><h3 class="text-center mt-5">Título:</h3></label>
                        <input style="width: 65vh;" type="text" name="title" id="title" required>
                        <br>
                        <label for="desc"><h3 class="text-center mt-5">Descrição:</h3></label>
                        <br>
                        <textarea name="desc" id="desc" rows="20" cols="40" required></textarea>
                        <label for="corFundo"><h3 class="text-center mt-5">Cor de Fundo do Card:</h3></label>
                        <select style="width: 65vh;border-radius: 10px;" id="corFundo" name="corFundo" required>
                                <option value="#FFFFFF" style="background-color: #FFFFFF;">Branco</option>
                                <option value="#FF0000" style="background-color: #FF0000; color: white;">Vermelho</option>
                                <option value="#00FF00" style="background-color: #00FF00;">Verde</option>
                                <option value="#0000FF" style="background-color: #0000FF; color: white;">Azul</option>
                                <option value="#FFFF00" style="background-color: #FFFF00;">Amarelo</option>
                                <option value="#FFA500" style="background-color: #FFA500;">Laranja</option>
                                <option value="#800080" style="background-color: #800080; color: white;">Roxo</option>
                                <option value="#000000" style="background-color: #000000; color: white;">Preto</option>
                        </select><br>    
                        <label for="corText"><h3 class="text-center mt-5">Cor de Texto do Card:</h3></label>
                        <select style="width: 65vh;border-radius: 10px;" id="corText" name="corText" required>
                            
                            <option value="#000000" style="background-color: #000000; color: white;">Preto</option>
                                <option value="#FFFFFF" style="background-color: #FFFFFF;">Branco</option>
                                <option value="#FF0000" style="background-color: #FF0000; color: white;">Vermelho</option>
                                <option value="#00FF00" style="background-color: #00FF00;">Verde</option>
                                <option value="#0000FF" style="background-color: #0000FF; color: white;">Azul</option>
                                <option value="#FFFF00" style="background-color: #FFFF00;">Amarelo</option>
                                <option value="#FFA500" style="background-color: #FFA500;">Laranja</option>
                                <option value="#800080" style="background-color: #800080; color: white;">Roxo</option>
                        </select><br>  
                        <label for="corDate"><h3 class="text-center mt-5">Cor da Data do Card:</h3></label>
                        <select style="width: 65vh;border-radius: 10px;" id="corDate" name="corDate" required>
                                
                            <option value="#000000" style="background-color: #000000; color: white;">Preto</option>
                                <option value="#FFFFFF" style="background-color: #FFFFFF;">Branco</option>
                                <option value="#FF0000" style="background-color: #FF0000; color: white;">Vermelho</option>
                                <option value="#00FF00" style="background-color: #00FF00;">Verde</option>
                                <option value="#0000FF" style="background-color: #0000FF; color: white;">Azul</option>
                                <option value="#FFFF00" style="background-color: #FFFF00;">Amarelo</option>
                                <option value="#FFA500" style="background-color: #FFA500;">Laranja</option>
                                <option value="#800080" style="background-color: #800080; color: white;">Roxo</option>
                        </select><br>
                        <h3 class="text-center mt-5">Posição do texto do Card</h3>
                        <select style="width: 65vh;border-radius: 10px;" id="PosT" name="PosT" required>
                            <option value="start">Esquerda</option>
                            <option value="center">Centro</option>
                            <option value="end">Direita</option>
                        </select><br>

                        <label for="imgURL"><h3 class="text-center mt-5">Link da Imagem:</h3></label>
                        <input style="width: 65vh;" type="url" name="imgURL" id="imgURL" required>



                        
                        <h3 class="text-center mt-5 mb-5">Seu Card tem botâo de ver mais?</h3>
                                    
                        <br>
                        <h4 class="text-center">Sim</h4><input type="radio" name="seeM" id="seeM" value="1"><br>
                        <h4 class="text-center">Não</h4><input type="radio" name="seeM" id="seeM" value="0" checked><br>

                        <h3 class="text-center mt-5 mb-5">Seu Card tem borda?</h3>
                                    
                        <br>
                        <h4 class="text-center">Sim</h4><input onclick="Borda()" type="radio" name="border" id="border" value="1" checked><br>
                        <h4 class="text-center">Não</h4><input onclick="Borda()" type="radio" name="border" id="border" value="0"><br>
                        
                        <div  class="row col-12 d-flex justify-content-center align-items-center" id="allBor">
                                        
                            <label for="corBorda"><h3 class="text-center mt-5">Cor da Borda do Card:</h3></label>
                            <select style="width: 65vh;border-radius: 10px;" id="corBorda" name="corBorda">
                                    <option>--</option>
                                    <option value="#FFFFFF" style="background-color: #FFFFFF;">Branco</option>
                                    <option value="#FF0000" style="background-color: #FF0000; color: white;">Vermelho</option>
                                    <option value="#00FF00" style="background-color: #00FF00;">Verde</option>
                                    <option value="#0000FF" style="background-color: #0000FF; color: white;">Azul</option>
                                    <option value="#FFFF00" style="background-color: #FFFF00;">Amarelo</option>
                                    <option value="#FFA500" style="background-color: #FFA500;">Laranja</option>
                                    <option value="#800080" style="background-color: #800080; color: white;">Roxo</option>
                                    <option value="#000000" style="background-color: #000000; color: white;">Preto</option>
                            </select><br>  

        
                        </div>
                        <button class="mb-5 mt-2" style="width: 65vh;">Visualizar Card</button>
                    </form>
                    </div>
                </div>

            </div>

        </div>



    </div>



    <script>

        function Borda(){
            document.querySelector('input[name="border"]:checked').value == 1 ? document.getElementById('allBor').style.visibility = "visible" : document.getElementById('allBor').style.visibility = "hidden" ;

            
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>