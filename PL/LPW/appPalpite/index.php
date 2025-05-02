




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palpite</title>
</head>
<body>
    <form action="jogo.php" method="post">
        <div style="align-items: center;display: flex;justify-content: center;">
            <!-- <button id="play" style="width: 57vh;height: 14vh;font-size: 10vh;text-align: center;">JOGAR</button> -->
            <input type="submit" id="play" style="width: 57vh;height: 14vh;font-size: 10vh;text-align: center;" value="JOGAR">
        </div>
        <div style="align-items: center;display: flex;justify-content: center;">
            <h1>Quantidade de Opções:</h1>
            <input style="width: 57vh;height: 14vh;font-size: 10vh;text-align: center;" type="number" name="papT" id="papT" min="3" max="12" value="3">
        </div>
    </form>


    <script>

        document.getElementById('play').addEventListener('click',()=>{
            let palp = document.getElementById('papT').value;
            palp > 12 ? document.getElementById('papT').value = 12 : 
            (palp < 3 ? document.getElementById('papT').value = 3:null);
        });


    </script>
</body>
</html>





