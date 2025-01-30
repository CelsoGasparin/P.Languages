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
    public static function buscarClientes($id){
        // $actualId = null;
        // foreach (ClienteDAO::listarClientes() as $key => $cli) {
        //     if($id == $cli['id']){
        //         $actualId = $cli['id'];
        //         break;
        //     }
        // }
        // $sql = $actualId == null ?
        // "SELECT * FROM clientes WHERE nome_social = "."'$id'":
        // "SELECT * FROM clientes WHERE id = ".$id;
        // $pdo = Connection::getConn();
        // $stm = $pdo->prepare($sql);
        // $stm->execute();
        // $array = $stm->fetch();
        // return $array;
        $sql1 = "SELECT * FROM clientes WHERE id = ?;";
        $pdo = Connection::getConn();
        $stm1 = $pdo->prepare($sql1);
        $stm1->execute(array($id));
        $sql2 = "SELECT * FROM clientes WHERE nome_social = ?";
        $stm2 = $pdo->prepare($sql2);
        // $stm2->bindParam(':nome',$id);
        $stm2->execute([$id]);
        $clienteId = $stm1->fetch();
        return $clienteId == null ? $stm2->fetch() : $clienteId;
        
    }
    public static function excluirCliente($id){

        $sql = "DELETE FROM clientes WHERE id = ?";
        $pdo = Connection::getConn();
        $stm = $pdo->prepare($sql);
        $stm->execute([$id]);
    }

}