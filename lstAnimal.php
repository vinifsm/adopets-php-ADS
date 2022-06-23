<?php
session_start();
if (!isset($_SESSION['login']) && $_SESSION['nivel'] == 2) {
    Header("Location: index.php");
}

include 'menu.php';
include 'conexao.php';
$pdo = Conexao::conectar();
$sql  = "select * from animal";

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

    <title>Listar Pets</title>
</head>

<body>
    <br>
    <br>
    <h1 class="center">Animais
        <a class="btn-floating btn-large waves-effect waves-light teal darken-2" onclick="JavaScript:location.href='frmInsAnimal.php'"><i class="material-icons">add</i></a>
    </h1>
    <br>
    <br>
    <table class="container white">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
        </tr>
        <?php
        foreach ($lstDog as $adocao) {
        ?>
            <tr>
                <td><?php echo $adocao['id'] ?></td>
                <td><?php echo $adocao['tipoanimal'] ?></td>
                <td><?php echo $adocao['descricaoanimal'] ?></td>
                <td><a class="btn-floating btn-medium waves-effect waves-light teal darken-2" onclick="JavaScript:location.href='frmEdtAnimal.php?id='+
                    <?php echo $adocao['id']; ?> ">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-medium waves-effect waves-light teal darken-2" onclick="JavaScript:location.href='frmRemAnimal.php?id='+
                    <?php echo $adocao['id']; ?> ">
                        <i class="material-icons">delete</i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <br>
    <div class="row center">
        <button class="btn waves-effect waves-light teal darken-3" type="button" id="btnVoltar" onclick="JavaScript:location.href='index.php'">
            Voltar
        </button>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>