<?php
    require "conexao.php";
    // Upload foto
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta = "../fotos/";
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta.date("Ymd-His").$extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    //Fim upload

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $check = "SELECT * FROM usuario WHERE email = '$email'";
    foreach(mysqli_query($con, $check) as $key => $value){
        $emailExiste = $value['email'];
    }
    if($email == $emailExiste){
        header("Location:cadastro_usuarioHTML.php?v=<span class='text-danger'>Este email já existe</span>");
    }else{
        $sql = "INSERT INTO usuario VALUES(NULL, '$nome', '$email', '$fone', '$senha', '$nome_foto')";
        $res = mysqli_query($con, $sql);
            if(mysqli_affected_rows($con) == 1){
                header("Location:listar_usuarios.php");
            } else{
                echo "Falha na gravação do registro<br>";
            }
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