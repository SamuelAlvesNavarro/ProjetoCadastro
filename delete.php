<?php
    require 'conexao.php';
    $id = $_GET['id_usuario'];
    
    $sql = "DELETE FROM usuario WHERE id_usuario = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_affected_rows($con);
    if($row == 1){
        echo "Dados deletados com sucesso";
        header("Location:listar_usuarios.php");
    } else{
        echo "Falha na gravação do registro<br>";
        header("Location:error.php");
    }
?>