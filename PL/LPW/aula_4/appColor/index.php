<?php

    if(!($_GET===[]) || $_GET['color'] != ""){
        ?>

        <style>

            *{
                background-color: <?= $_GET['color'] ?>;
            }

        </style>

        <?php
    }




?>

<form action="">

    <select name="color" id="color">
        <option>--</option>
        <option value="Tomato">Tomato</option>
        <option value="Orange">Orange</option>
        <option value="DodgerBlue">DodgerBlue</option>
        <option value="MediumSeaGreen">MediumSeaGreen</option>
        <option value="Gray">Gray</option>
        <option value="SlateBlue">SlateBlue</option>
        <option value="Violet">Violet</option>
        <option value="LightGray">LightGray</option>
        
    </select>
    <button type="submit" >Submit</button>
</form>