<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formPhp</title>
</head>
<body>

    <form action="insert.php" method="post">


        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="imgURL">Url da imagem:</label>
        <input type="url" id="imgURL" name="imgURL"><br><br>

        <label for="dev">Developer:</label>
        <input type="text" id="dev" name="dev"><br><br>

        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher"><br><br>

        <label for="price">Preço: R$</label>
        <input type="number" id="price" name="price" min="0" step="0.05" max="80"><br><br>

        <label for="genres">Genêros:</label>
        <select name="genres" id="genres">
            <option value="a">--</option>
        </select><br><br>

        <label for="plats">Plataformas:</label>
        <select name="plats" id="plats">
            <option value="a">--</option>
        </select><br><br>

        <label for="fileSize">Tamanho dos Arquivos(em GB):</label>
        <input type="number" id="fileSize" name="fileSize" min="0" step="0.1" placeholder="GigaBytes" max="999"><br><br>

        <label for="ageRating">ageRating:</label>
        <select name="ageRating" id="ageRating">
            <option value="a">--</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
