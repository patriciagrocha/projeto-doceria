<?php include "config.inc.php";?>
<?php


$id =    $_POST['id'];
$produto =  $_POST['produto'];
$descricao =  $_POST['descricao'];
$preco = $_POST['preco'];


$buscaId = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

$sql = "UPDATE produtos SET produto='$produto', descricao='$descricao', preco='$preco' WHERE id=$id";

$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
<a href='index.php'>Voltar</a>";
}else{
   echo "<h3>Produto atualizado com sucesso!</h3><a href='index.php'>Voltar</a>";
}
?>