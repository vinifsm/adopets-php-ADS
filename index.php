<?php
include 'menu.php';
include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from pet order by nome limit 5";

$lstDog = $pdo->query($sql);
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

  <title>Listar Imovéis</title>
</head>
<div class="banner">
  <img class="bannerimg" src="images/banner.jpeg">
</div>

<body>
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
            <p><a href="#">Adotar</a></p>
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
  <div class="blocks center">
  <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstImovel.php'">
    Ver Mais ...
  </button>
  </div>
</body>

</html>
<?php
include 'footer.php';
?>