<?php




class Connection{


    private static $conn = null;



    public static function getConn(){
        if(self::$conn == null){
           try{
            $options = [
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o tipo do retorno das consultas
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            $user = 'root';
            $pass = 'bancodedados';
            $host = '127.0.0.1:3306';
            $dbname = 'db_biblioteca';
            self::$conn =  new PDO('mysql:host='.$host.';dbname='.$dbname
            ,$user,$pass
            ,$options);

           }catch(Exception $e){
            print "Erro: ".$e->getMessage();
           }

        }
        return self::$conn;
    }

}
