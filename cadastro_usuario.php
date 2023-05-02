<?php
    require "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario VALUES(NULL, '$nome', '$email', '$fone', '$senha')";
    $res = mysqli_query($con, $sql);
    if(mysqli_affected_rows($con) == 1){
        echo "Dados cadastrados com sucesso";
    } else{
        echo "Falha na gravação do registro<br>";
    }

    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="cadastro_usuario.html">Voltar</a>
</body>
</html>