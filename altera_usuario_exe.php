<?php
    require 'conexao.php';
    session_start();
    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    $update = "UPDATE usuario SET nome = '$nome', email = '$email', fone = '$fone', senha = '$senha' WHERE id_usuario = '$id'";
    mysqli_query($con, $update);
    mysqli_close($con);
    header('Location:index.php');
?>