<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require "conexao.php";
        $sql = "SELECT * FROM usuario";
        // mysli_qurey => executa uma comando no banco
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        mysqli_close($con);
    ?>
    <h1 align="center">Consulta de usuários</h1>
    <table align="center" class="table table-striped border border-black border-1" style="width: 1200px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($result as $key => $row){
                    echo "<tr scope='row'>";
                    echo "<td>".$row['id_usuario']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['fone']."</td>";
                    echo "<td><a href='altera_usuario.php?id_usuario=". $row['id_usuario'] ."'><button class='btn btn-primary'>Mudar</button></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>