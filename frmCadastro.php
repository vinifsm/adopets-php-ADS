<?php
  session_start(); 
  if (isset($_SESSION['login']))
      Header("Location: index.php"); 
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
                                <h4>Cadastro</h4>
                                <form action="insUser.php" method="post" id="frmInsUser" class="col s12">
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">account_box</i>
                                        <input id="lblNome" type="text" name="txtUsername" class="validate">
                                        <label for="lblNome">Nome</label>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">mail</i>
                                            <label for="lblEmail">E-mail</label>
                                            <input id="lblEmail" name="txtLogin" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">local_phone</i>
                                            <label for="lblTelefone">Telefone</label>
                                            <input id="lblTelefone" name="txtTelefone" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">lock</i>
                                            <label for="lblSenha">Senha</label>
                                            <input id="lblSenha" name="txtPassword" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button class="btn waves-effect waves-light teal darken-3" type="submit">Cadastrar
                                        </button>
                                        <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnVoltar" onclick="JavaScript:location.href='index.php'">
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