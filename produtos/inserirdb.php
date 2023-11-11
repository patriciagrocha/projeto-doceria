<?php include "config.inc.php"; ?>  

<?php

$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

if($produto == "" || $descricao == "" || $preco == ""  ){
    echo "<h3>Produto não cadastrado, preencha todos os campos!</h3><br>";
    echo "<a href='inserir.php'>Tente Novamente</a>";
} else{
    $sql = "INSERT INTO produtos ( produto ,descricao, preco) VALUES('$produto','$descricao', '$preco')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='inserir.php'>Tente Novamente</a>";
}else{
   echo "<h3>Produto cadastrado com sucesso!</h3><br>";
   echo "<a href='inserir.php'>Cadastrar Novamente</a><br>";
   echo "<a href='listar.php'>Listar produtos</a>";
}

}

?>