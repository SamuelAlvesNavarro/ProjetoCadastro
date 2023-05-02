<?php
    $con = mysqli_connect("localhost", 'root', "", "projeto1","3307");
    //mysqli_select_db($con, "projeto1");

    if(mysqli_connect_errno()){
        printf("Erro conexão: %s \n", mysqli_connect_error());
        exit();
    }
?>