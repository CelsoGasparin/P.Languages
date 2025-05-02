<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    



    <h3>Cadastro de Pessoa</h3>
    <form action="executa.php" method="get">
    <input style="width: 175px;" type="text" placeholder="Informe o nome" name="nome" id="nome" required>

    <br><br>

    <input style="width: 175px;" type="number" placeholder="informe a idade" min="0" max="125" name="idade" id="idade" required>



    <br><br>

    <button type="submit">Submit</button>
    <button type="reset">Limpar</button>
    <button type="button">Botão que não faz nada</button>
    </form>
</body>
</html>
