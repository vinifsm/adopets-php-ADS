<?php
    include 'conexao.php';
    //programa php para inserir dados de imovel
    $nome = trim($_POST['txtNome']); 
    $email = trim($_POST['txtLogin']); 
    $telefone = trim($_POST['txtTelefone']);
    $senha = trim($_POST['txtPassword']); 
    $senha = md5($senha);

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha)){
        $sql = "INSERT INTO usuario(nome, login, telefone, password) VALUES (?, ?, ?, ?)";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $senha));
        Conexao::desconectar(); 
    }

    header("location:index.php"); 

?>