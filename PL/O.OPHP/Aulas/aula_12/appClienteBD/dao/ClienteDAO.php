<?php

require_once __DIR__."/../model/Cliente.php";
require_once __DIR__."/../model/ClientePF.php";
require_once __DIR__."/../model/ClientePJ.php";
require_once __DIR__."/../util/Connection.php";






class ClienteDAO{

    public static function inserirCliente(Cliente $cliente){
        $sql = "INSERT INTO clientes(tipo, nome_social, email, nome, cpf, razao_social, cnpj) VALUES 
        (?,?,?,?,?,?,?)";
        $pdo = Connection::getConn();
        
        $stm = $pdo->prepare($sql);
        $stm->execute(array($cliente->getTipo(),$cliente->getNomeSocial(),$cliente->getEmail(),
                            $cliente->getNome(),$cliente->getCpf(),$cliente->getRazaoSocial(),
                            $cliente->getCnpj()));

    }
    public static function listarClientes(){
        $sql = "SELECT * FROM clientes";
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $array = $stm->fetchAll();
        return $array;
    }
    public static function mapClientes($id){
        $actualId = null;
        foreach (ClienteDAO::listarClientes() as $key => $cli) {
            if($id == $cli['id']){
                $actualId = $cli['id'];
                break;
            }
        }
        $sql = $actualId == null ?
        "SELECT * FROM clientes WHERE nome_social = "."'$id'":
        "SELECT * FROM clientes WHERE id = ".$id;
        
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $array = $stm->fetch();
        return $array;
    }
    public static function excluirCliente($id){

        $sql = "DELETE FROM clientes WHERE id = ".$id;
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute();
    }

}