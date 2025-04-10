<head>
<script src="https://kit.fontawesome.com/eb12f0e7b1.js" crossorigin="anonymous"></script>
</head>

<?php
    include "conn.php";

    $sql = "SELECT * FROM itens";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<th scope='row'>" . $linha["id"] . "</th>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["preco"] . " R$" . "</td>";
            echo "<td>" . $linha["categoria"] . "</td>";
            echo "<td>" . $linha["quantidade"] . "</td>";
            echo "<td><a href='editar.html' class='btn btn-primary'><i class='fa-solid fa-pen'></i></a></td>";
            echo "</tr>";
        }
    }else{
        echo "Nenhum item cadastrado";
    }

    $conn->close();
?>