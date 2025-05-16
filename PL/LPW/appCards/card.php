<?php
require_once "model/Card.php";




$card = new Card($_POST['title'],$_POST['desc'],$_POST['imgURL'],$_POST['corFundo'],$_POST['corText'],$_POST['corDate'],
                $_POST['PosT'],$_POST['seeM'],$_POST['border'],$_POST['corBorda']);
// print_r($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Card</title>

    <style>
        body{
            
                
            background-color: <?= $card->getColor() == "#FFFFFF" ? 'black' : 'white';?>;
           
        }
    </style>
</head>
<body>
    
    
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
                <!-- <div class="card" style="border:0px solid  ;width: 32vh; border-radius: 25px;background-color:'..';color:'..';">

                    
                    <img class="card-img-top" style=" border-radius: 25px 25px 0px 0px;width: 309px;" src="https://ava.ifpr.edu.br/pluginfile.php/530002/user/icon/boost_union/f2?rev=16763358" alt="Card image cap">
                    
                  <div class="card-body " style="border-radius: 0px 0px 25px 25px;background-color: '..';">
                      <h5 class="card-title text-'..'">'..'</h5>
                      <p class="card-text text-'..'">'..'</p>
                      <p class="card-text text-center" style="color: '..';">'..'</p>
                      <a href="#" class="btn btn-primary">Ver Mais</a>
                  </div>
                </div> -->

                
                <?= $card ?> 
            <a href="index.php">Voltar</a>
            </div>

        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>