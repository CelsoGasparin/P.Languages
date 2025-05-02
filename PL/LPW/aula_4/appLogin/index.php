<?php

if(!($_POST===[])){
   $logado = $_POST['name']==='ifpr'&&$_POST['passw']==='tds';
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    

    <?php 
        // if(($_POST===[]) || ($_POST['name']!="ifpr" || $_POST['passw']!="tds")){
        if(!$logado):
    ?>
    <form action="" method="post">

    <input type="text" name="name" id="name" placeholder="Nome" required>
    <br><br>
    <input type="password" name="passw" id="passw" placeholder="Password" required>
    <br><br>
    <button type="submit">Login</button>
    </form>
    <?php
        else:
            print"Bem Vindo ao TDS!";
            // isso é ruim pq os dados ficam expostos no POST
        endif;
    ?>


</body>
</html>


