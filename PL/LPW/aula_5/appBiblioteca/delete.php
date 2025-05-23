<?php

require_once "util/Connection.php";


$conn = Connection::getConn();
if(!isset($_GET['id'])){
    header('location:index.php');
    exit;
}
    // print "TESTE";
    // sleep(3);
$sql = 'DELETE from livros WHERE id = ?';

$stm = $conn->prepare($sql);
$stm->execute([$_GET['id']]);
header('location:index.php');


