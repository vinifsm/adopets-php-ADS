<?php
  session_start(); 
   if (!isset($_SESSION['login'])){
       Header("Location: index.php");   
      }

$id = $_SESSION['id'];

include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select pet.id, pet.nome, pet.idade, pet.sexo, raca.raca, pet.porte, animal.tipoanimal, pet.descricao, pet.adotador, pet.imagem, usuario.login, usuario.username, usuario.telefone from pet inner join usuario on pet.protetor = usuario.id 
inner join animal on pet.animal = animal.id 
inner join raca on pet.raca = raca.id 
where adotador =";
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
<body class="teal">
  <br>
  <br>
  <div class="bigcontainer white">
  <div class="had-container center">

                            <img src="./images/icon.jpeg" width="150" class="circle responsive-img">
                            <div class="row login">
                            <h1 class="center">Pets Adotados</h1> 
                            <br>                         
                                <form action="edtUser.php" method="post" id="frmInsUser" class="col s12">
                                    <div class="row">
                                    <?php
  foreach ($lstDog as $adocao) {
  ?>
      <div class="blocks1">
        <div class="card card1">
          <div class="card-image card-image1 waves-effect waves-block waves-light">
            <img class="activator imgcard" src="<?php echo $adocao['imagem'] ?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $adocao['nome'] ?><i class="material-icons right">more_vert</i></span>
                <span>Protetor: <?php echo $adocao['username'] ?></span><br>
                <span>E-mail: <?php echo $adocao['login'] ?></span><br>
                <span>Telefone: <?php echo $adocao['telefone'] ?></span></h5>
                                        <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnExcluir" onclick="JavaScript:location.href='frmRemAdocao.php?id=<?php echo $adocao['id']?>'">
                                            Cancelar
                                        </button>                                  
                    </div>
          <div class="card-reveal">
          <h5 class="descri"><span class="card-title black-text text-darken-4"><b>Informações</b><i class="material-icons right">close</i></span>
          <br>
            <span>Descrição: <?php echo $adocao['descricao'] ?></span><br><br>
            <span>Animal: <?php echo $adocao['tipoanimal'] ?></span><br><br>
            <span>Idade: <?php echo $adocao['idade'] ?> anos</span><br><br>
            <span>Sexo: <?php if($adocao['sexo']=='M'){?>Macho<?php }else{?>Femea<?php }?></span><br><br>
            <span>Raca: <?php echo $adocao['raca'] ?></span><br><br>
            <span>Porte: <?php if($adocao['porte']=='P'){?>Pequeno<?php }else if($adocao['porte']=='M'){?>Médio<?php }else{?>Grande<?php }?></span><br><br>
          </div>
        </div>
      </div>
  <?php
    }
  ?>    
                                </div> 
                                    <div class="row">
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