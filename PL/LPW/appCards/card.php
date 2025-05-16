<?php
require_once "model/Card.php";




$card = new Card($_POST['title'],$_POST['desc'],$_POST['imgURL'],$_POST['corFundo'],$_POST['corText'],$_POST['corDate'],
                $_POST['PosT'],$_POST['seeM'],$_POST['border'],$_POST['corBorda']);
print_r($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    
<div class="card" style="width: 32vh; border-radius: 25px;background-color:'..';color:'..';">
  <img class="card-img-top" style=" border-radius: 25px 25px 0px 0px;" src="https://avatars.githubusercontent.com/u/134729228?v=4&size=40/100px180/" alt="Card image cap">
  <div class="card-body " style="border-radius: 0px 0px 25px 25px;background-color: '..';">
      <h5 class="card-title text-'..'">'..'</h5>
      <p class="card-text text-'..'">'..'</p>
      <p class="card-text text-center" style="color: '..';">'..'</p>
      <a href="#" class="btn btn-primary">Ver Mais</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>