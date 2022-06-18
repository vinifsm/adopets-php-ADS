<?php
include 'conexao.php';
//programa php para inserir dados de imovel
session_start();
$id = trim($_POST['txtId']);
$nome = trim($_POST['txtNome']);
$idade = trim($_POST['txtIdade']);
$descricao = trim($_POST['txtDesc']);

if (!empty($nome) && !empty($idade) && !empty($descricao)) {
    $sql = "UPDATE pet SET nome=? , idade=?, descricao=? WHERE id=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($nome,$idade,$descricao,$id));
    Conexao::desconectar();
}

header("location:index.php");
