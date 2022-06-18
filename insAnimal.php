<?php
include 'conexao.php';
    $nome = trim($_POST['txtNome']); 
    $descricao = trim($_POST['txtDesc']); 

 if(!empty($nome) && !empty($descricao))
 {
 
    $sql = "INSERT INTO animal(tipoanimal, descricaoanimal) VALUES (?, ?)";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $descricao));
    Conexao::desconectar(); 
 }
 header("location:lstAnimal.php"); 
?>