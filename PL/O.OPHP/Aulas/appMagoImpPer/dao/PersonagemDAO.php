<?php


require_once __DIR__.'/../util/Connection.php';
require_once __DIR__.'/../model/Personagem.php';
require_once __DIR__."/../model/Classe.php";
require_once __DIR__."/../model/Subclasse.php";
require_once __DIR__."/../model/Poder.php";
require_once __DIR__."/../model/Arma.php";

class PersonagemDAO{





    public static function listarPersonagens(){

        $sql = "SELECT * FROM Personagem";
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $array = $stm->fetchAll();
        return $array;

    }
    public static function insertPersonagem(Personagem $personagem){
        $sql = "INSERT INTO Personagem(STR,DEX,CON,MAG,classe,nome,poderes,armaEquipada,HP) VALUES
        (?,?,?,?,?,?,?,?,?)";
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $pods = [];
        foreach($personagem->getPoderes() as $key => $poder){
            $pods[$poder->getDescricao()] = $poder->getDescricao(); 
        }
        $stm->execute([$personagem->getSTR(),$personagem->getDEX(),$personagem->getCON(),$personagem->getMAG()
                       ,$personagem->getClasse()->getNome(),$personagem->getNome(),serialize($pods)
                       ,$personagem->getArmaEquipada()->getDescricao(),$personagem->getMaxHP()]);
    }
    public static function buscarCliente($id){
        $pdo = Connection::getConn();
        $sql1 = "SELECT * FROM Personagem WHERE id = ?;";
        $stm1 = $pdo->prepare($sql1); 
        $stm1->execute([$id]);
        $persoID = $stm1->fetch();
        $sql2 = "SELECT * FROM Personagem WHERE nome = ?;";
        $stm2 = $pdo->prepare($sql2);
        $stm2->execute([$id]);

        return $persoID == null ?$stm2->fetch() : $persoID;
    }
    public static function excluirCliente($id){
        $sql = "DELETE FROM Personagem WHERE id = ?;";
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute([$id]);
    }

}