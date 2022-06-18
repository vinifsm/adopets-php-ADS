<?php
include 'conexao.php';
    $id = $_GET['id'];

 if(!empty($id))
 {
    $sql = "DELETE FROM animal WHERE id=?";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar(); 
 }
 header("location:lstAnimal.php"); 
?>