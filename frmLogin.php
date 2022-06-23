<?php
  session_start(); 
  if (isset($_SESSION['login']))
      Header("Location: index.php"); 
?>
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
    <title>AdoPet</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
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
                            <form method="post" action="login.php"  id="frmInsUser" class="col s12">
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">mail</i>
                                        <input id="lblUser" type="text" name="user" class="validate" required="true">
                                        <label for="icon_prefix">E-mail &nbsp;<label for="lblUser" generated="true" class="error red-text"></label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons iconis prefix">lock</i>
                                        <input id="lblPassword" type="password" name="password" class="validate" required="true">
                                        <label for="lblPassword">Senha &nbsp;<label for="lblPassword" generated="true" class="error red-text"></label></label>
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
    <script src="validacao.js"></script>
</body>

</html>
