<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TituloInsano</title>
</head>
<body>
    
    <form action="filme_card.php" method="post">

        <input type="text" placeholder="Nome do Filme" name="name" id="name" required>
        <br><br>
        <input type="text" placeholder="Nome do Diretor" name="diretor" id="diretor" required>
        <br><br>
        <input type="number" min="1888" max="2025" step="1" name="year" id="year" plad placeholder="Ano do Filme" required>
        <br><br>
        <input type="url" placeholder="Link da Imagem do Filme" name="image" id="image" required>
        <br><br>
        <button type="submit" >Submit</button>

    </form>
    

</body>
</html>
