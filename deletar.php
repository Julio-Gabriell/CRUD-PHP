<?php

    include "conn.php";

    $id = $_POST["idProduto"];

    $sql = "DELETE FROM itens WHERE id = $id";

    if ($conn->query($sql) === True){
        header("Location: index.php");
    }else{
        echo "Erro" . $conn->error;
    }

    $conn->close();
    
?>