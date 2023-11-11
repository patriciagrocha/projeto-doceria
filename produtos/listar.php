<?php include "config.inc.php"; ?>
<?php

$sql = "SELECT * FROM produtos ORDER BY id";
$consulta = mysqli_query($conexao, $sql);
$produtos = mysqli_num_rows($consulta);

// while($dados = mysqli_fetch_array($consulta)){

//   $produto = $dados[1];
//   $descricao = $dados[2];
//   $preco = $dados[3];
 
//   echo $produto;
//   echo $descricao;
//   echo $preco;

// }
// mysqli_close($conexao);

?>
<table>
  <h1>Listar Produtos</h1>
  
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
      <td><?= $dados[0]; ?></td>
      <td><?= $dados[1]; ?></td>
      <td><?= $dados[2]; ?></td>
      <td>R$ <?= $dados[3]; ?></td>
      <td><a href="?pg=alterar&id=<?= $dados[0]; ?>">ALTERAR</a></td>
      <td>
        <a href="javascript:confirmaExclusao('excluir.php?&id=<?= $dados[0]; ?>')" class="ask">
          EXCLUIR
        </a>
      </td>
    </tr>
      
  <?php }  echo "<a href='inserir.php'>Cadastrar Novo Produto</a><br>";?>

</table> 