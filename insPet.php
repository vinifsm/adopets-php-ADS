<?php
include 'conexao.php';
session_start();
    $nome = trim($_POST['txtNome']); 
    $idade = trim($_POST['txtIdade']); 
    $raca = trim($_POST['slcAnimal']);
    $sexo = trim($_POST['slcSexo']); 
    $porte = trim($_POST['slcPorte']);
    $desc = trim($_POST['txtDesc']);

    
    $sql = "select * from raca where id =";

    $pdo = Conexao::conectar(); 
    $lstDog = $pdo->query($sql.$raca);
    Conexao::desconectar(); 

    foreach($lstDog as $adocao){$animal=$adocao['tipo'];}
      
 if(isset($_FILES['pic']) && !empty($nome) && !empty($idade) && !empty($animal) && !empty($raca) && !empty($sexo) && !empty($porte) && !empty($desc))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './images/'; //Diretório para uploads
    $imagem = $dir.$new_name; 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso!");

    $sql = "INSERT INTO pet(nome, idade, animal, protetor, raca, sexo, porte, descricao, imagem) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $query = $pdo->prepare($sql);
    $query->execute(array($nome, $idade, $animal, $_SESSION['id'], $raca, $sexo, $porte, $desc, $imagem));
    Conexao::desconectar(); 
 }
 header("location:index.php"); 
?>