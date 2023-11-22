<?php include "config.inc.php"; ?>
<?php

$sql = "SELECT * FROM produtos ORDER BY id";
$consulta = mysqli_query($conexao, $sql);
$produtos = mysqli_num_rows($consulta);

?>
<table>
  <h1>Produtos Cadastrados</h1>
  
  <tr>
    <td style="width: 25px;">ID</td>
    <td style="width: 205px;">NOME DO PRODUTO</td>
    <td style="width: 205px;">DESCRIÇÃO</td>
    <td style="width: 205px;">PREÇO</td>
    <td style="width: 105px;">ALTERAR</td>
    <td style="width: 105px;">EXCLUIR</td>
  </tr>
  <?php
    while ($dados = mysqli_fetch_array($consulta)) { ?>

    <tr>
      <td><?= $dados['ID']; ?></td>
      <td><?= $dados['PRODUTO']; ?></td>
      <td><?= $dados['DESCRICAO']; ?></td>
      <td>R$ <?= $dados['PRECO']; ?></td>
      <!-- <td><a href="?pg=alterar.php&id=<?= $dados['ID']; ?>">ALTERAR</a></td> -->
      <td><a href="inserir.php&id=1">ALTERAR</a></td>

      <td>
        <a href="javascript:confirmaExclusao('excluir.php?&id=<?= $dados['ID']; ?>')" class="ask">
          EXCLUIR
        </a>
      </td>
    </tr>
      
  <?php }  echo "<a href='inserir.php'>Cadastrar Novo Produto</a><br>";?>

</table> 