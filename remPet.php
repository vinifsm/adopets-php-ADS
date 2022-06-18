<?php
include 'conexao.php';
//programa php para inserir dados de imovel
session_start();
$id = $_GET['id'];

if (!empty($id)) {
    $pdo = Conexao::conectar();
    $sql  = "select * from pet where id=";
    $lstDog = $pdo->query($sql.$id);
    foreach($lstDog as $adocao){
        unlink($adocao['imagem']);
    }
    Conexao::desconectar();

    $sql = "DELETE FROM pet WHERE id=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();
}

header("location:index.php");
