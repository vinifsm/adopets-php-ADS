<?php
  session_start(); 
   if (!isset($_SESSION['login'])){
       Header("Location: index.php");   
      }

$user = $_SESSION['login'];
      
include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from usuario where login LIKE ?";

$frmConta = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">

    <title>Inserir Dados de Imóvel</title>
</head>

<body class="teal">
    <div class="bigcontainer">
        <div class="had-container center">
            <div class="parallax-container logueo">
                <div class="row"><br>
                    <div class="col m8 s20 offset-m2 offset-s5 center white">
                        <h4 class="truncate bg-card-user">
                            <img src="./images/icon.jpeg" width="150" class="circle responsive-img">
                            <div class="row login">
                                <h4>Deseja mesmo remover sua conta?</h4>                            
                                <form action="insUser.php" id="frmInsUser" class="col s12">
                                    <div class="row">
                                        <button class="btn waves-effect waves-light red darken-3" type="button" id="btnExcluir" onclick="JavaScript:location.href='remUser.php'">
                                            Excluir
                                        </button>
                                        <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnVoltar" onclick="JavaScript:location.href='frmConta.php'">
                                            Voltar
                                        </button>
                                    </div>
                            </div>
                    </div>
                    </form>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>