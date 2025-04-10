<?php
    include "conn.php";

    $nome = $_POST["nomeProduto"];
    $categoria = $_POST["categoriaProduto"];
    $valor = $_POST["precoProduto"];
    $quantidade = $_POST["quantidadeProduto"];

    $sql = "INSERT INTO itens (nome, preco, quantidade, categoria) VALUES ('$nome', '$valor', '$quantidade', '$categoria')";

    if($conn->query($sql)){
        header("Location: index.php");
    }else{
        echo "Erro: " . $conn->error;
    }

    $conn->close();
?>