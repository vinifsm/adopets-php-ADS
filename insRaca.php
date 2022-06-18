<?php
include 'conexao.php';
    $nome = trim($_POST['txtNome']); 
    $descricao = trim($_POST['txtDesc']); 
    $animal = trim($_POST['slcAnimal']);

 if(!empty($nome) && !empty($descricao) && !empty($animal))
 {
 
    $sql = "INSERT INTO raca(tipo, raca, descricaoraca) VALUES (?, ?, ?)";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $query->execute(array($animal, $nome, $descricao));
    Conexao::desconectar(); 
 }
 header("location:lstRaca.php"); 
?>