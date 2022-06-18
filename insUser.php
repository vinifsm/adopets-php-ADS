<?php
    include 'conexao.php';
    //programa php para inserir dados de imovel
    $username = trim($_POST['txtUsername']); 
    $email = trim($_POST['txtLogin']); 
    $telefone = trim($_POST['txtTelefone']);
    $senha = trim($_POST['txtPassword']); 
    $senha = md5($senha);

    if (!empty($username) && !empty($email) && !empty($telefone) && !empty($senha)){
        $sql = "INSERT INTO usuario(username, login, telefone, password) VALUES (?, ?, ?, ?)";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($username, $email, $telefone, $senha));
        Conexao::desconectar(); 
    }

    header("location:index.php"); 

?>