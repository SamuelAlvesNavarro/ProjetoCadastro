<?php
    require 'conexao.php';
    session_start();
    $id = $_GET['id_usuario'];
    $_SESSION['id'] = $id;
    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="text-center container-fluid p-4">
        <h1 class="h1">Alterar Dados do Usuário - IFSP</h1>
    </div>
    <form method="post" action="altera_usuario_exe.php" class="container border border-black border-1 align-middle">
        <!-- <input name="id_usuario" type="hidden" value="<?php //echo $row['id_usuario'] ?>" !-->
        <div>
            <label for="" class="form-label pt-3">Nome: </label>
            <input type="text" class="form-control ms-3" name="nome" id="nome" required style="width: 90%;" value="<?php echo $row['nome'] ?>"><br>
        </div>
        <div>
            <label for="" class="form-label">E-mail: </label>
            <input type="text" class="form-control ms-3" name="email" id="nome" required value="<?php echo $row['email'] ?>" style="width: 90%;"><br>
        </div>
        <div>
            <label for="" class="form-label">Telefone: </label>
            <input type="tel" class="form-control ms-3" name="fone" id="nome" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['fone'] ?>" style="width: 90%;"><br>
        </div>
        <div>
            <label for="" class="form-label">Senha: </label>
            <input type="password" class="form-control ms-3" name="senha" id="nome" required style="width: 90%;" value="<?php echo $row['senha'] ?>"><br><br>
        </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-primary mb-3 ms-3">
        </div>
    </form>
</body>
</html>