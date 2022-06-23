<?php
session_start();
if (!isset($_SESSION['login'])) {
  Header("Location: index.php");
}

include 'menu.php';
include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from pet where estado = 'L' and protetor != ";
$id = $_SESSION['id']; 
$sql1 = " order by nome";

$lstDog = $pdo->query($sql.$id.$sql1);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Listar Pets</title>
</head>

<body>
  <br>
  <br>
  <h1 class="center">Pets para adoção</h1>
  <br>
  <br>
  <?php
  foreach ($lstDog as $adocao) {
  ?>
    <div class="blocks">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator imgcard" src="<?php echo $adocao['imagem'] ?>">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><?php echo $adocao['nome'] ?><i class="material-icons right">more_vert</i></span>
          <form class="center" id="formulario" name="formulario" method="get" action="frmAdocao.php">
            <input id="id" name="id" type="hidden" value="<?php echo $adocao['id'] ?>" />
            <button class="btn waves-effect waves-light teal darken-2" type="submit" id="btnVoltar" onclick="JavaScript:location.href='index.php'">
              Adotar
            </button>
          </form>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Descrição<i class="material-icons right">close</i></span>
          <p><?php echo $adocao['descricao'] ?></p>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</body>

</html>
<?php
include 'footer.php';
?>