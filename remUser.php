<?php
include 'conexao.php';
//programa php para inserir dados de imovel
session_start();
$id = $_SESSION['id'];

if (!empty($id)) {
    $sql = "UPDATE pet SET adotador=0 , estado='L' WHERE adotador=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();

    $pdo = Conexao::conectar();
    $sql  = "select * from pet where protetor=";
    $lstDog = $pdo->query($sql.$id);
    foreach($lstDog as $adocao){
        unlink($adocao['imagem']);
    }
    Conexao::desconectar();

    $sql = "DELETE FROM pet WHERE protetor=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();

    $sql = "DELETE FROM usuario WHERE id=?";

    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar();
}

header("location:logout.php");
