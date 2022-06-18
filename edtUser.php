<?php
    include 'conexao.php';
    //programa php para inserir dados de imovel
    $username = trim($_POST['txtUsername']); 
    $telefone = trim($_POST['txtTelefone']);
    $login = trim($_POST['txtLogin']);

    if (!empty($username) && !empty($login) && !empty($telefone)){
        $sql = "UPDATE usuario SET username=?,telefone=? WHERE login=?";
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['telefone']=$telefone;

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($username,$telefone,$login));
        Conexao::desconectar(); 
    }

    header("location:index.php");
