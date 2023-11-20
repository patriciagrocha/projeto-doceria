<?php include "config.inc.php";
include_once("../topo.php");
?>

<html>

<head>
  <title>Doce Appetit</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/min.css">
</head>

<body>
  <div class="container p-5">

    <?php

    $sql = "SELECT * FROM produtos ORDER BY id";
    $consulta = mysqli_query($conexao, $sql);
    ?>
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3>PRODUTOS CADASTRADOS</h3>
        <a class="btn btn-success" href="inserir.php">Cadastrar</a>
      </div>
    </div>
    <table class="table table-hover mt-4">
      <thead>
        <tr>
          <th scope="col" style="width: 25px;">ID</th>
          <th scope="col" style="width: 205px;">NOME DO PRODUTO</th>
          <th scope="col" style="width: 205px;">DESCRIÇÃO</th>
          <th scope="col" style="width: 205px;">PREÇO</th>
          <th scope="col" style="width: 105px;"></th>
          <th scope="col" style="width: 105px;"></th>
        </tr>
      </thead>
      <?php
      while ($dados = mysqli_fetch_array($consulta)) { ?>

        <tr>
          <td><?= $dados['id']; ?></td>
          <td><?= $dados['produto']; ?></td>
          <td><?= $dados['descricao']; ?></td>
          <td>R$ <?= $dados['preco']; ?></td>
          <td><a class="btn btn-primary" href="alterar.php?id=<?= $dados['id']; ?>">Editar</a></td>
          <!-- <td><a href="inserir.php&id=1">ALTERAR</a></td> -->

          <td>
            <a class="btn btn-danger" href="deletar.php?&id=<?= $dados['id']; ?>" class="ask">
              Excluir
            </a>
          </td>
        </tr>

      <?php } ?>

    </table>
  </div>

</body>

</html>

<?php
include_once("../rodape.php");
?>