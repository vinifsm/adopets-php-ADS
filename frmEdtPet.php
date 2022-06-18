<?php
session_start();
if (!isset($_SESSION['login'])) {
  Header("Location: index.php");
}

$id = $_GET['id'];;

include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from pet where id =";

$lstDog = $pdo->query($sql . $id);
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
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

  <title>Listar Imovéis</title>
</head>

<body class="teal">
  <br>
  <br>
  <div class="bigcontainer white">
    <div class="had-container center">

      <img src="./images/icon.jpeg" width="150" class="circle responsive-img">
      <div class="row login">
            <?php foreach ($lstDog as $adocao) {
            ?>
              <h1 class="center">Editar Pet</h1>
              <br>
              <div class="blockscontent center">
                <h4><span class="card-title black-text text-darken-4"><b><?php echo $adocao['nome'] ?></b></span></h4>
                <img src="<?php echo $adocao['imagem'] ?>" width="500">
              </div>
              <div>
                <br>
                <h5 class="descri">
                  <form action="edtPet.php" method="post" id="frmInsUser" class="col s12">
                    <div class="row">
                      <div class="input-field col m12 s12">
                        <i class="material-icons iconis prefix">toc</i>
                        <input id="lblId" type="hidden" name="txtId" class="hidden" value="<?php echo $adocao['id'] ?>">
                        <input id="lblNome" type="text" name="txtNome" class="validate" value="<?php echo $adocao['nome'] ?>" required="true">
                        <label for="lblNome">Nome &nbsp;<label for="lblNome" generated="true" class="error red-text"></label></label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col m12 s12">
                        <i class="material-icons iconis prefix">toc</i>
                        <label for="lblIdade">Idade &nbsp;<label for="lblIdade" generated="true" class="error red-text"></label></label>
                        <input id="lblIdade" name="txtIdade" type="text" value="<?php echo $adocao['idade'] ?>" required="true" digits="true">
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col m12 s12">
                        <i class="material-icons iconis prefix">toc</i>
                        <label for="lblDesc">Descrição &nbsp;<label for="lblDesc" generated="true" class="error red-text"></label></label>
                        <input id="lblDesc" name="txtDesc" type="text" value="<?php echo $adocao['descricao'] ?>" required="true">
                      </div>
                    </div>
                    <div class="row">
                      <button class="btn waves-effect waves-light teal darken-3" type="submit">Editar
                      </button>
                      <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstDivulgados.php'">
                        Voltar
                      </button>
                    </div>
        </form>
        </h5>
      </div>
    <?php } ?>
    </div>
  </div>
            </div>
            <script src="validacao.js"></script>
</body>

</html>