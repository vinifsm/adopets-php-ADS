<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>AdoPet</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper teal darken-2">
            <a href="index.php" class="brand-logo center"><img src="images\iconverde.jpeg" width="150"></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down space">
                <li><a href="lstAdocao.php">Quero Adotar</a></li>
                <li><a href="frmDivulgar.php">Quero Divulgar</a></li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down space1">
            <li><a href="frmLogin.php">Login</a></li>
            <li><a href="frmCadastro.php">Cadastro</a></li>
            <li class="size"><a data-target="slide-out" class="sidenav-trigger size"><i class="material-icons">menu</i></a></li>
                </ul>
        </div>
    </nav>
    <?php if (isset($_SESSION['login'])){?>
<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <div class="background teal darken-2">
    </div>
    <a href="#user"></a>
    <a href="#name"><span class="white-text name"><?php echo $_SESSION['username'];?></span></a>
    <a href="#email"><span class="white-text email"><?php echo $_SESSION['login'];?></span></a>
  </div></li>
  <li><a class="waves-effect" href="frmConta.php"><i class="material-icons">account_circle</i>Conta</a></li>
  <li><a class="waves-effect" href="lstAdotados.php"><i class="material-icons">pets</i>Pets Adotados</a></li>
  <li><a class="waves-effect" href="lstDivulgados.php"><i class="material-icons">pets</i>Pets Divulgados</a></li>
  <?php if($_SESSION['nivel']==2){?>
    <li><a class="waves-effect" href="lstAnimal.php"><i class="material-icons">computer</i>Painel de Animais</a></li>
    <li><a class="waves-effect" href="lstRaca.php"><i class="material-icons">computer</i>Painel de Raças</a></li>
    <?php } ?>
  <li><a class="waves-effect" href="logout.php"><i class="material-icons">lock</i>Logout</a></li>
</ul>
<?php }?>  
</body>

</html>

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
  

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav({
      edge: 'right',
    });
  });
</script>