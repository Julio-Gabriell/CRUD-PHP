<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dataBase = "php_aulas";

    $conn = new mysqli($host, $usuario, $senha, $dataBase);

    if ($conn->connect_error){
        die("Erro :" . $conn->connect_error);
    }
?>