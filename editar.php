<?php
    include "conn.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM itens WHERE id=$id";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        while ($linha = $resultado->fetch_assoc()){

            $nomeProduto = $linha["nome"];
            $valorProduto = $linha["preco"];
            $quantidadeProduto = $linha["quantidade"];
            $categoriaProduto = $linha["categoria"];
        }
    }else{
        echo "Valores não carregados";
    }
?>





<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="Imgs/favicon.ico" type="image/x-icon">
  <title>Crud Mercado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/eb12f0e7b1.js" crossorigin="anonymous"></script>
</head>

<body class="overflow-hidden">
  <div class="container">
  <div class="d-flex justify-content-center">
    <h1 class="py-3 display-3">
      Editar produto
    </h1>
  </div>

  <div class="container">
  <form action="procEditar.php?id=<?php echo $id ?>" method="post" class="row">

        <div class="col-md-6">
            <label for="nomeProduto" class="form-label">Nome Do Produto: </label>
            <input type="text" name="nomeProduto" id="nomeProduto" class="form-control border-3" placeholder="Product name" value="<?php echo $nomeProduto ?>" required>
        </div>
        <div class="col-md-6">
            <label for="precoProduto" class="form-label">Valor Do Produto: </label>
            <input type="number" name="precoProduto" id="precoProduto" class="form-control border-3" placeholder="Product price" value="<?php echo $valorProduto ?>" required>
        </div>

        <div class="col-md-6 py-3">
            <label for="categoriaProduto" class="form-label">Categoria Do Produto: </label>
            <input type="text" name="categoriaProduto" id="categoriaProduto" class="form-control border-3" placeholder="Product category" value="<?php echo $categoriaProduto ?>" required>
        </div>
        <div class="col-md-6 py-3">
            <label for="quantidadeProduto" class="form-label">Quantidade Do Produto: </label>
            <input type="number" name="quantidadeProduto" id="quantidadeProduto" class="form-control border-3" placeholder="Product quantity" value="<?php echo $quantidadeProduto ?>" required>
        </div> 

        <div class="row">
            <div class="d-flex justify-content-center gap-3 py-3">
                <button type="submit" class="btn btn-success btn-lg px-3">
                    Confirmar <i class="fa-solid fa-check px-1"></i>
                </button>
                <a href="index.php" class="btn btn-danger btn-lg px-3">Cancelar <i class="fa-solid fa-ban px-1"></i></a>
            </div>
        </div>

    </form>
</div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>