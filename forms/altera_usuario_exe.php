<?php
    require 'conexao.php';
    session_start();
    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta = "../fotos/";
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta.date("Ymd-His").$extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }

    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id'";
    $result = mysqli_query($con, $sql);
    foreach($result as $key => $value){
        $fotoAntiga = $value['foto'];
    }
    unlink($fotoAntiga);

    $update = "UPDATE usuario SET nome = '$nome', email = '$email', fone = '$fone', senha = '$senha', foto = '$nome_foto' WHERE id_usuario = '$id'";
    mysqli_query($con, $update);
    mysqli_close($con);
    header('Location:index.php');
?>