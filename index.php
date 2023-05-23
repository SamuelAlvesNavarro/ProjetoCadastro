<?php
    require "criasessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <h3 class="">Página Inicial - Projeto Cadastro IFSP</h3><br><br>
    <?php
        if(!empty($_SESSION['login'])){
            echo "<h3> Olá ". $_SESSION['login']['nome'] ."</h3>";
            echo "<a href='logout.php'>Sair</a>"; 
        }   
    ?>
    <hr>
   <ul class="menu">
        <li><a href="cadastro_usuarioHTML.php">Cadastrar</a></li>
        <li><a href="listar_usuarios.php">Listar</a></li>
        <?php
            if(empty($_SESSION['login'])){
                echo "<li><a href='login.html'>Login</a></li>"; 
            }
        ?>
   </ul>

</body>
</html>