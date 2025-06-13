<?php
require __DIR__."/../util/Connection.php";

class JogoDao{

    private static $conn = Connection::getConn();

    public static function insert($nam,$imgURL,$plats,$lan,$gens,$dev,$pub,$pri,$ageR,$fileSize){
        $sql = "INSERT INTO jogo(nome,imgURL,plataformas,lancamento,generos,desenvolvedor,publisher,preco,ageRating,fileSize) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stm = self::$conn->prepare($sql);
        $stm->execute([$nam,$imgURL,$plats,$lan,$gens,$dev,$pub,$pri,$ageR,$fileSize]);
    }
    public static function delete($id){
        $sql = "DELETE FROM jogo WHERE id = ?";
        $stm = self::$conn->prepare($sql);
        $stm->execute([$id]);
    }



}