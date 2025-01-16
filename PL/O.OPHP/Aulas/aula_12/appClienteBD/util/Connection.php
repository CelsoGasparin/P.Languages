<?php




class Connection{

    private static $conn;

    public static function getConn(){

        if(self::$conn == null){
            $opcoes = [PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8",
                       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            self::$conn = new PDO("mysql:host=127.0.0.1:3306;dbname=clientes", "root", "bancodedados",$opcoes);
        }

        return self::$conn;

    }

}


