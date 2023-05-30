<?php
    require 'conexao.php';
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM   usuario WHERE email = '$email' and senha = '$senha'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
        include('criasessao.php');
        // array com os dados do usuário que estão no banco
        $_SESSION['login'] = mysqli_fetch_array($result);
        // Volta para a página inicial
        header('Location: index.php');
    }else{
        echo "<h1>Usuário não encontrado!</h1>";
    }

?>