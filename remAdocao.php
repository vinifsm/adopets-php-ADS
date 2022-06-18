<?php
include 'conexao.php';
//programa php para inserir dados de imovel
$id = $_GET['id'];

if (!empty($id)) {
    $sql = "UPDATE pet SET adotador=0 , estado='L' WHERE id=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();
}

header("location:index.php");
