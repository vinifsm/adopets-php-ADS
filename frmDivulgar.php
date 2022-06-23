<?php
session_start();
if (!isset($_SESSION['login'])) {
  Header("Location: index.php");
}

include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select raca.id, raca.raca, animal.tipoanimal from raca inner join animal on raca.tipo = animal.id order by tipoanimal, raca;";
$lstRaca = $pdo->query($sql);
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="./css/style.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> </script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
  <title>Inserir Pets</title>
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
                <form action="insPet.php" method="post" id="frmInsUser" class="col s12" enctype="multipart/form-data">
                  <div class="row">
                    <div class="input-field col m12 s12">
                      <i class="material-icons iconis prefix">toc</i>
                      <input id="lblNome" type="text" name="txtNome" class="validate" required="true">
                      <label for="lblNome">Nome &nbsp;<label for="lblNome" generated="true" class="error red-text"></label></label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col m12 s12">
                      <i class="material-icons iconis prefix">toc</i>
                      <label for="lblIdade">Idade &nbsp;<label for="lblIdade" generated="true" class="error red-text"></label></label>
                      <input id="lblIdade" name="txtIdade" type="text" required="true" digits="true">
                    </div>
                  </div>


                  <div class="row">
                    <label for="lblAnimal" class="black-text bold">Escolha o Animal:</label>

                    <div class="input-field col s12" required="true">
                      <select name="slcAnimal" id="slcAnimal">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <?php
                        foreach ($lstRaca as $adocao) { ?>
                          <option class="black-text" value="<?php echo $adocao['id']; ?>"><li><?php echo $adocao['tipoanimal']; ?> - <?php echo $adocao['raca']; ?></li></option>
                          
                        <?php }
                        ?>
                      </select>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="row">
                    <label for="lblSexo" class="black-text bold">Escolha o Sexo:</label>

                    <div class="input-field col s12">

                      <select name="slcSexo" id="slcSexo">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option class="black-text" value="M">Macho</option>
                        <option class="black-text" value="F">Femea</option>
                      </select>

                    </div>
                  </div>
                  <div class="row">
                    <label for="lblPorte" class="black-text bold">Escolha o Porte:</label>

                    <div class="input-field col s12">

                      <select name="slcPorte" id="slcImovel">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option class="black-text" value="G">Grande</option>
                        <option class="black-text" value="M">Médio</option>
                        <option class="black-text" value="P">Pequeno</option>
                      </select>

                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col m12 s12">
                      <i class="material-icons iconis prefix">toc</i>
                      <label for="lblDesc">Descrição &nbsp;<label for="lblDesc" generated="true" class="error red-text"></label></label>
                      <input id="lblDesc" name="txtDesc" type="text" required="true">
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col m12 s12">
                        <label for="conteudo" class="black-text">Enviar imagem:</label>
                        <br>
                       <h5> <input type="file" name="pic" accept="image/*">
                      </h5>
                        <br />
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
              </form>
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="validacao.js"></script>
</html>

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>