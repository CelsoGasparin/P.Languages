<?php

require_once "../model/Cliente.php";
require_once "../model/ClientePF.php";
require_once "../model/ClientePJ.php";
require_once "../util/Connection.php";


class ClienteDAO{

    public static function inserirCliente(Cliente $cliente){

        $sql = "INSERT INTO clientes(".'"'.$cliente->getTipo().'"'.
        ",".'"'.$cliente->getNomeSocial().'"'.")";



    }


}