<?php include "config.inc.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = '$id'";
$consulta = mysqli_query($conexao, $sql);

while ($dados = mysqli_fetch_array($consulta)) {

?>

  <form class="card" action="deletardb.php" method="post">
  <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
    <p> Deseja excluir o produto <strong><?= $dados['produto']; ?> </strong> ? </p>

    <button class="btn btn-primary" type="submit">SIM</button>

    <button class="btn btn-primary"><a href="index.php">NÃO</a></button>
  </form>
<?php
}
?>