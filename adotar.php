<?php
    include 'conexao.php';
    //programa php para inserir dados de imovel
    $id = trim($_GET['id']);
    $estado = 'A';
    session_start();
    $adotador = $_SESSION['id']; 


    if (!empty($id)){
        $sql = "UPDATE pet SET estado=?,adotador=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($estado,$adotador,$id));
        Conexao::desconectar(); 
    }

    header("location:index.php");
