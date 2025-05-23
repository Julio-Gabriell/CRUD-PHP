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
      Estoque
    </h1>
  </div>

  <table class="table table-striped text-center">
    <thead>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Editar</th>
    </thead>
    <tbody>
      <?php
        include "listar.php"
      ?>
    </tbody>
  </table>

  <div class="row">
    <div class="d-flex justify-content-center gap-3">
      <a href="criar.html" class="btn btn-success">Adicionar produto <i class="fa-solid fa-plus px-1"></i></a>
      <a href="deletar.html" class="btn btn-danger">Deletar produto <i class="fa-solid fa-trash px-1"></i></a>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>