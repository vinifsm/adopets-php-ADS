<?php
    $login = trim($_POST['user']); 
    $pwd = trim($_POST['password']); 

   include 'conexao.php';
   $sql = "select * from usuario where login LIKE ?";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($login));
   $dados = $query->fetch(PDO::FETCH_ASSOC);

   echo $dados['login']; 
  
   Conexao::desconectar(); 
   if (md5($pwd)==$dados['password']){
      session_start();
      $_SESSION['login'] = $dados['login'];
      $_SESSION['id'] = $dados['id'];
      $_SESSION['pwd'] = $dados['password'];
      $_SESSION['nivel'] = $dados['nivel']; 
      $_SESSION['username'] = $dados['username']; 
      $_SESSION['telefone'] = $dados['telefone'];
      header("location:index.php"); 
  }
  else header("location:frmLogin.php"); 
?>
