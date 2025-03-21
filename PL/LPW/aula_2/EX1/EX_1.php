<?php

$colors = ['yellow','blue','black','green'
          ,'red','purple','gray','brown'];



foreach($colors as $color){
?>
<div style="background-color: <?= $color ?>; width: 100px;height:100px;"></div>

<?php
}
?>