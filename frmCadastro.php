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

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <link rel="stylesheet" href="./css/style.css">

    <title>Inserir dados</title>
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
                                        <input id="lblNome" type="text" name="txtUsername" class="validate" required>
                                        <label for="lblNome">Nome &nbsp;<label for="lblNome" generated="true" class="error red-text"></label></label>

                                    </div>

                                </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">mail</i>
                                            <label for="lblEmail">E-mail &nbsp;<label for="lblEmail" generated="true" class="error red-text"></label></label>
                                            <input id="lblEmail" name="txtLogin" type="email" required="true" email="true">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">local_phone</i>
                                            <label for="lblTelefone">Telefone &nbsp;<label for="lblTelefone" generated="true" class="error red-text"></label></label>
                                            <input id="lblTelefone" name="txtTelefone" type="text" required="true" digits="true" rangelength="[10,11]">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m12 s12">
                                            <i class="material-icons iconis prefix">lock</i>
                                            <label for="lblSenha">Senha &nbsp;<label for="lblSenha" generated="true" class="error red-text"></label></label>
                                            <input id="lblSenha" name="txtPassword" type="text" required="true" rangelength="[4,12]">
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
    <script src="validacao.js"></script>
</body>

</html>