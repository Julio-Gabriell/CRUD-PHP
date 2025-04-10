<?php

    include "conn.php";

    $nome = $_POST["nomeProduto"];
    $categoria = $_POST["categoriaProduto"];
    $valor = $_POST["precoProduto"];
    $quantidade = $_POST["quantidadeProduto"];
    $id = $_POST["idProduto"];

    $sql = "UPDATE itens SET nome='$nome', preco=$valor, quantidade=$quantidade, categoria='$categoria' WHERE id=$id";


    if ($conn->query($sql) === True){
        header("Location: index.php");
    }else{
        echo "Erro: " . $conn->error;
    }

    $conn->close();
?>