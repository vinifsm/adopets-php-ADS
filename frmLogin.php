<?php
  session_start(); 
  if (isset($_SESSION['login']))
      Header("Location: index.php"); 
?>
<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet"
    id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--      <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 -->
    <title>Sistema Imobiliária</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->
    <!-- My CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="teal">
<div class="bigcontainer">
    <div class="had-container center">
        <div class="parallax-container logueo">
            <div class="row"><br>
                <div class="col m8 s20 offset-m2 offset-s5 center white">
                    <h4 class="truncate bg-card-user">
                        <img src="./images/icon.jpeg" width="150"
                            class="circle responsive-img">
                        <div class="row login">
                            <h4>Login</h4>
                            <br>
                            <form method="post" action="login.php" class="col s12">
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">mail</i>
                                        <input id="icon_prefix" type="text" name="user" class="validate">
                                        <label for="icon_prefix">E-mail</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">lock</i>
                                        <input id="password" type="password" name="password" class="validate">
                                        <label for="password">Senha</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn waves-effect waves-light teal darken-3" type="submit" name="action">Acessar</button>
                                    <button class="btn waves-effect waves-light teal darken-3" type="button" onclick="JavaScript:location.href='index.php'">Voltar</button>
                                </div>
                            </form>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>
    </footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
</body>

</html>
