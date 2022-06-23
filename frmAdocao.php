<?php
session_start();
if (!isset($_SESSION['login'])) {
    Header("Location: index.php");
}

$id = $_GET['id'];;

include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from pet inner join usuario on pet.protetor = usuario.id 
inner join animal on pet.animal = animal.id 
inner join raca on pet.raca = raca.id 
where pet.id =";
$sql1 = " order by nome";

$lstDog = $pdo->query($sql . $id . $sql1);
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

    <title>Adotar Pet</title>
</head>

<body class="teal">
    <br>
    <br>
    <div class="bigcontainer white">
        <div class="had-container center">

            <img src="./images/icon.jpeg" width="150" class="circle responsive-img">
            <div class="row login">

                <br>
                <form action="adotar.php" method="get" id="frmInsUser" class="col center s12">
                    <div class="row">
                        <?php foreach ($lstDog as $adocao) {
                        ?>
                            <h1 class="center">Adotar Pet</h1>
                            <br>
                            <div class="blockscontent center">
                            <h4><span class="card-title black-text text-darken-4"><b><?php echo $adocao['nome'] ?></b></span></h4>
                                <img src="<?php echo $adocao['imagem'] ?>" width="500">
                            </div>
                            <div class="blockscontent">
                                <h5 class="descri">
                                    <br>
                                    <br>
                                    <input id="id" name="id" type="hidden" value="<?php echo $id?>" />
                                    <span>Descrição: <?php echo $adocao['descricao'] ?></span><br><br>
                                    <span>Animal: <?php echo $adocao['tipoanimal'] ?></span><br><br>
                                    <span>Idade: <?php echo $adocao['idade'] ?> anos</span><br><br>
                                    <span>Sexo: <?php if ($adocao['sexo'] == 'M') { ?>Macho<?php } else { ?>Femea<?php } ?></span><br><br>
                                    <span>Raca: <?php echo $adocao['raca'] ?></span><br><br>
                                    <span>Porte: <?php if ($adocao['porte'] == 'P') { ?>Pequeno<?php } else if ($adocao['porte'] == 'M') { ?>Médio<?php } else { ?>Grande<?php } ?></span><br><br>
                                    <span>Protetor: <?php echo $adocao['username'] ?></span><br><br>
                                    <span>E-mail: <?php echo $adocao['login'] ?></span><br><br>
                                    <span>Telefone: <?php echo $adocao['telefone'] ?></span>
                                </h5>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light teal darken-3" type="submit" id="btnVoltar">
                            Adotar
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