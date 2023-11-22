<?php include "config.inc.php";?>
<?php

$id =  $_POST['id'];
$sql = "DELETE FROM `produtos` WHERE id=$id";

$deleteId = mysqli_query($conexao, $sql);


if(!$deleteId){
    echo "Ocorreu um erro ao deletar dados no banco de dados. <br>
<a href='index.php'>Voltar</a>";
}else{
   echo "<h3>Produto excluído com sucesso!</h3><a href='index.php'>Voltar</a>";
}
?>