<?php 

                if(empty($_GET['v'])){
                    $texto = "";
                }else{  
                    $texto = $_GET['v'];  
                }
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
        <h1 class="h1">Cadastro de Usuário - IFSP</h1>
    </div>
    <form method="post" action="cadastro_usuario.php" class="container border border-black border-1 align-middle container-md">
        <div>
            <label for="" class="form-label pt-3">Nome: </label>
            <input type="text" class="form-control" name="nome" id="nome" required placeholder="Enter name"><br>
        </div>
        <div>
            <label for="" class="form-label">E-mail: </label> <?php echo $texto; ?>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="example@gmail.com" aria-label="example@gmail.com" aria-describedby="basic-addon1" required name="email"><br>
            </div>

        </div>
        <div>
            <label for="" class="form-label">Telefone: </label>
            <input type="tel" class="form-control" name="fone" id="nome" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" placeholder="Formato (18) 99999-8888"><br>
        </div>
        <div>
            <label for="" class="form-label">Senha: </label>
            <input type="password" class="form-control" name="senha" id="nome" required style="width: 20%;" placeholder="Enter password"><br>
        </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-outline-primary mb-3 ms-3">
        </div>
    </form>
</body>
</html>