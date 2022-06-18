<?php
include 'conexao.php';
    $id = trim($_POST['txtId']);
    $nome = trim($_POST['txtNome']); 
    $descricao = trim($_POST['txtDesc']); 

 if(!empty($id) && !empty($nome) && !empty($descricao))
 {
    $sql = "UPDATE raca SET raca=?,descricaoraca=? WHERE id=?";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $descricao, $id));
    Conexao::desconectar(); 
 }
 header("location:lstRaca.php"); 
?>